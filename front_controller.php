<?php 
require_once "settings.php";

$solicitud = $_SERVER['REQUEST_URI'];
$array = explode("/", $solicitud);

$modulo = $array[1];
$recurso = (isset($array[2])) ? $array[2] : '' ;
$arg = (isset($array[3])) ? $array[3] : 0 ;

settype($arg, 'int');

$file = "modules/".strtolower($modulo).".php";

if (file_exists($file)) require_once $file;
$c = ucwords($modulo)."Controller";
if (class_exists($c)) $controller = new $c();
if (method_exists($c, agregar) $controller->agregar();





?>