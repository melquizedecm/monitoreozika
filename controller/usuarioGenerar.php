<?php
/* 
 * Nombre del Programa: monitoreozika.com
 * Autores: Yazmin Fuentes Palomo ,Melquizedec Moo Medina
 * 
 * Descripcion: CONTROLADOR que permite agregar preguntas y respuestas
 * 1.   RECUPERAR DATOS
 * 2.   CONFIGURAR LAS VARIABLES
 * 3.	Enviar datos al modelo.
 * 4.   DEVOLVER LA RESPUESTA A LA VISTA
 * 
 */
require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassUsuarios.php';
libnivel2();
///1. RECUPERAR DATOS
$name_user = $_POST['usuario'];
$password_user = $_POST['password'];
$type_user= $_POST['tipo'];

////2. CONFIGURAR VARIABLES
$status_user=1;
///3.  ENVIAR DATOS AL MODELO
$UsuarioNuevo=new Usuarios();
$idUsuario=$UsuarioNuevo->guardarUsuario($name_user,$password_user,$type_user,$status_user);
//echo $idPreguntaM;
///4. DEVOLVER UN MENSAJE A LA VISTA
if ($idUsuario) {
    $argumentos = "message=DATOS_MODIFICADOS&tipo=0001";
    header("Location: ../view/user.php?" . $argumentos);
} else {
    $argumentos = "message=ERROR_AL_GUARDAR&tipo=0004";
    header("Location: ../view/user.php?" . $argumentos);
}
?>