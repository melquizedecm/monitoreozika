<?php
require_once("../lib/consultas.php");
require_once '../lib/links.php';
libnivel2();

/* 
 * Nombre del Programa: usuarioConfguracion.php
 * Autores: Apolo Tiburcio Colorado ,Melquizedec Moo Medina
 * 
 * Descripcion: CONTROLADOR QUE ASIGNAR LOS DATOS DEL USUARIO A UNA AREA 
 * 
 * 1.	Recepcion de datos
 * 2.   ACTUALIZAMOS EN LA BASE DE DATOS
 * 3.   ENVIAR DATOS AL MODELO
 * 4.	HACER VALIDACIONES Y ENVIAR A LA PANTALLA PRINCIPAL.
 * 
 */

//////////1. RECEPCION DE DATOS /////////////
$usuariosesion=$_SESSION['session_username'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

//////////2. ACTUALIZAMOS EN LA BASE DE DATOS /////////////
$sql="UPDATE usuario SET "
        . "usuario = '".$usuario."', "
        . "password = '".$password."', "
        . "nombre = '".$nombre."', "
        . "correo = '".$correo."'"
        . "WHERE usuario = '".$usuariosesion."'";
 $result = getResultSQL($sql);
 
 //////////3. ENVIAR DATOS AL MODELO /////////////
 regMovimiento("INFORMACION ACTUALIZADA DEL USUARIO: ".$nombre." POR EL USUARIO: ".$$usuariosesion);

 //////////4. HACER VALIDACIONES Y ENVIAR A LA PANTALLA PRINCIPAL /////////////
if (!$result) {
   die('Error: ' . mysql_error());
   $message="ERROR AL GUARDAR";
   $tipo="004";
   header('Location: ../view/index.php?message='.$message.'&tipo='.$tipo);
}
else{
    
     $message="INFORMACION EDITADA";
     $tipo="001";
     header('Location: ../view/index.php?message='.$message.'&tipo='.$tipo);
}