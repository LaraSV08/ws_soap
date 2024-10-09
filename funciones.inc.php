<?php
/**
 * array_to_xml($array,$xml)
 * convierte un arreglo multidimensional en un formato xml
 * para ello, es necesario que el parametro $xml sea un objeto
 * de tipo SimpleXMLElement
 * @param array $array
 * @param object $xml
 * 
*/
function array_to_xml($array, &$xml) {

    foreach($array as $key => $value) {

        if(is_array($value)) {            
            if(!is_numeric($key)){
                $subnode = $xml->addChild($key);
                array_to_xml($value, $subnode);
            } else {
                array_to_xml($value, $xml);
            }
        } else {
            $xml->addChild($key, $value);
        }
        
    }        
}

/**
 * creaxml($raiz,$arreglo,$encoding)
 * Crea un objeto XML estructurado a partir de un arreglo multidimensional
 * y devuelve el objeto XML para capturarlo en tiempo de ejecución
 * @param string $raiz cadena que indica el valor del nodo raiz del xml
 * @param array $arreglo arreglo de valores que tendrá el documento xml
 * @param string $encoding indica la codificación de los caracteres, ejemplo: "ISO-8859-1" 
 * @return string cadena xml estructurada
 */
function creaxml($raiz,$arreglo,$encoding="UTF-8"){
    // CREATING XML OBJECT
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="'.$encoding.'" ?><'.$raiz.'/>');
    $xml->addAttribute('fecha', date('d/m/Y H:i:s'));

    array_to_xml($arreglo, $xml);

    $domxml = new DOMDocument('1.0');
    $domxml->preserveWhiteSpace = false;
    $domxml->formatOutput = true;
    $domxml->loadXML($xml->asXML());
    return $domxml->saveXML();
}

?>