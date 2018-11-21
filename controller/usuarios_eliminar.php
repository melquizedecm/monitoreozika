<?php

require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassUsuarios.php';
libnivel2();
/* 
 * Nombre del Programa: monitoreozika.com
 * Autores: Yazmin Fuentes Palomo ,Melquizedec Moo Medina
 * 
 * Descripcion: CONTROLADOR que permite agregar preguntas y respuestas
 * 
 * 
 * 1.   RECUPERAR DATOS
 * 2.   CONFIGURAR LAS VARIABLES
 * 3.	Enviar datos al modelo.
 * 4.   DEVOLVER LA RESPUESTA A LA VISTA
 * 
 */

///1. RECUPERAR DATOS
$id_user=$_REQUEST['id'];




////2. CONFIGURAR VARIABLES

///3.  ENVIAR DATOS AL MODELO
$UsuarioE=new Usuarios();
$idUsuarioE=$UsuarioE->eliminarUsuario($id_user);
//echo $idPreguntaM;

///4. DEVOLVER UN MENSAJE A LA VISTA
if ($idUsuarioE){
    $argumentos="message=DATOS_ElIMINADOS&tipo=0001";
    header("Location: ../view/user.php?".$argumentos);
}
else{
    $argumentos="message=ERROR_AL_ELIMINAR_DATOS&tipo=0004";
     header("Location: ../view/user.php?".$argumentos);
}



///$sql="INSERT INTO asignacion( edificio, area) VALUES ('".$edificio."','".$area."')";


?>