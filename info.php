<?php

$temperatura = $_GET['temp'];
$humedad = $_GET['hum'];

$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basededatos = "tutorial";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "No se ha podido seleccionar la base de datos" );

$fecha = time();
$consulta = "INSERT INTO datos (fecha, temperatura, humedad) VALUES (".$fecha.", ".$temperatura.", ".$humedad.")";
$resultado =mysqli_query($conexion, $consulta);

?>