<?php
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
require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassPreguntasRespuestas.php';
libnivel2();
///1. RECUPERAR DATOS
$id_pregunta=$_REQUEST['id'];
///2.  ENVIAR DATOS AL MODELO
$PreguntaEl=new PreguntasRespuestas();
$idPreguntaEl=$PreguntaEl->eliminarPregunta($id_pregunta);
///3. DEVOLVER UN MENSAJE A LA VISTA
if ($idPreguntaEl){
    $argumentos="message=DATOS_ElIMINADOS&tipo=0001";
    header("Location: ../view/pregunta.php?".$argumentos);
}
else{
    $argumentos="message=ERROR_AL_ELIMINAR_DATOS&tipo=0004";
     header("Location: ../view/pregunta.php?".$argumentos);
}
?>