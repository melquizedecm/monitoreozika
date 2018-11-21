<?php
require_once("../lib/consultas.php");
require_once '../lib/links.php';
libnivel2();
/* 
 * Nombre del Programa: asignarRolesModulos.php
 * Autores: Apolo Tiburcio Colorado ,Melquizedec Moo Medina
 * 
 * Descripcion: CONTROLADOR que permite asignar modulso a lso diferentes roles del sistema.
 * 
 * 1.	Recepcion de datos
 * 2.   INSERCION EN LA BASE DE DATOS.
 * 3.	Enviar datos al modelo.
 * 4.   ENVIAR A LA PANTALLA PRINCIPAL
 * 
 */
//////////1. RECEPCION DE DATOS /////////////
$nombre=$_SESSION['session_nombre'];
$edificio = $_POST['edificio'];
$area = $_POST['area'];
//////////2. INSERCION EN LA BASE DE DATOS /////////////
$sql="INSERT INTO asignacion( edificio, area) VALUES ('".$edificio."','".$area."')";
$result = getResultSQL($sql);
//////////3. ENVIAR DATOS AL MODELO /////////////
regMovimiento("EL ADMINISTRADOR: ".$nombre." ASIGNO AL EDIFICIO: ".$edificio." EL AREA DE: ".$area);
//////////4. ENVIAR A LA PANTALLA PRINCIPAL /////////////
if (!$result) {
   die('Error: ' . mysql_error());
   $message="ERROR AL GUARDAR";
   $tipo="004";
   header('Location: ../view/index.php?message='.$message.'&tipo='.$tipo);
}
else{
     $message="DEPARTAMENTO ASIGNADO CON EXITO";
     $tipo="001";
     header('Location: ../view/index.php?message='.$message.'&tipo='.$tipo);
}		
?>