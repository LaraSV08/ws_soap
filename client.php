<?php 
include("funciones.inc.php");
try{
    $options = array(
        'location'=>,'http://localhost/ws_soap/server.php',
        'uri'=>,'urn:departamento',
        'trace' => true
    );

    $cliente new SoapClient(null,$opciones);
    if(isset($GET["idz"])){
        $idz = intval($_GET["idz"]);
        if($idz > 0){
            $respuestas = $client->obtenerDepartamentosPorZona($idz);
        }
    }else{
        $respuestas = $client->obtenerDepartamentos();
    }

    $arreglo = array();

    foreach($respuestas as $respuesta){
        $arreglo[]["departamento"] = aray(
            "id" => $respuesta["id"],
            "nombre" => $respuesta["departamento"]
        );
    }
    $arr_headers = getallheaders();
    if($arr_headers["Accept"] == "application/xml"){
        $documento = creaxml("departamento",$arreglo);
        header("Content-Type: Application/xml");
        echo($documento);
    }elseif($arr_headers["Accept"] == "application/json"){
        header("Content-Type: Application/json");
        echo(json_encode($respuestas));
    }else{
        echo("ESPECIFIQUE EL FORMATO DE DATOS QUE USTED ESPERA");
    }
}catch(Exception $e){
    echo('Error:'.$e->getMessage());

}

?>