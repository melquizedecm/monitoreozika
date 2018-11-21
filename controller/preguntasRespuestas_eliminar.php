<?php

require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassPreguntasRespuestas.php';
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
$id_respuesta=$_REQUEST['id'];




////2. CONFIGURAR VARIABLES

///3.  ENVIAR DATOS AL MODELO
$PreguntaE=new PreguntasRespuestas();
$idPreguntaE=$PreguntaE->eliminarRespuesta($id_respuesta);
//echo $idPreguntaM;

///4. DEVOLVER UN MENSAJE A LA VISTA
if ($idPreguntaE){
    $argumentos="message=DATOS_ElIMINADOS&tipo=0001";
    header("Location: ../view/preguntas_respuestas.php?".$argumentos);
}
else{
    $argumentos="message=ERROR_AL_ELIMINAR_DATOS&tipo=0004";
     header("Location: ../view/preguntas_respuestas.php?".$argumentos);
}



///$sql="INSERT INTO asignacion( edificio, area) VALUES ('".$edificio."','".$area."')";


?>