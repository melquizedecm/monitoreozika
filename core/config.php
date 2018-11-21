<?php

/* 
 * Nombre del Programa: config.php
 * Autores: Apolo Tiburcio Colorado ,Melquizedec Moo Medina
 * 
 * Descripcion: CONTROLADOR que permite conectar a la base de datos
 * 
 * 1.	PARAMETROS PARA LOCALHOST
 * 2.   PARAMETROS PARA SERVIDOR
 * 3.	NUEVO METODO DE CONEXION
 * 
 */

function conectar(){

//1. PARAMETROS PARA LOCALHOST
$DBuser="root";
$DBpass="";
$DBserver="localhost";
$DBdatos="monitor7_zika"; ////   <---------- IMportante


//2. PARAMETROS PARA WEB
/*$DBuser="monitor7_ulises";
$DBpass="monitor135790";
$DBserver="localhost";
$DBdatos="monitor7_zika"; ////   <---------- IMportante
*/

////////////3. NUEVO METODO DE CONEXION////////////////////

$link = mysqli_connect($DBserver,$DBuser,$DBpass,$DBdatos);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	return null;
    exit;
}
else{
	return $link;
}
}

function liberar($resultado){
	$resultado->free();
}
function cerrar($link){
	$link->close();
}

?>
