<?php

//establecer conexión con la base de datos

$servidor = '127.0.0.1';
$usuario = 'root';
$password = '';
$basedatos = 'veterinaria';

$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

mysqli_query($conexion, "SET NAMES 'utf8'");

session_start();

?>

