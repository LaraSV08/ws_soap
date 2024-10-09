<?php 
ini_set("soap.wsdl_cache_enabled","0");
requiere_once("Departamento.php");
$options = ['uri'=>'urn:departamento','soap_version'=> SOAP_1_2,'encoding'=>'UTF-8'];
$server = new SoapServer(null,$options);
$server->setClass("Departamento");
$server->handle();
?>