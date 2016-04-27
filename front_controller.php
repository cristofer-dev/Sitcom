<?php 

$solicitud = $_SERVER['REQUEST_URI'];
$array = explode("/", $solicitud);

$modulo = $array[1];
$recurso = $array[2];
$arg = $array[3];


?>