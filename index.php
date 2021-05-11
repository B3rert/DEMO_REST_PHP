<?php

//Retorna datos a traves de una consulta sql 

require_once "clases/conexion/conexion.php";

$conexion = new conexion;

$query = "select * from producto";

print_r($conexion->obtenerDatos($query));

?>