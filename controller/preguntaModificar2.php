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
$id_pregunta = $_REQUEST['id'];
$pregunta = $_POST['pregunta'];



////2. CONFIGURAR VARIABLES
///3.  ENVIAR DATOS AL MODELO
$PreguntaM = new PreguntasRespuestas();
$idPreguntaM = $PreguntaM->modificarPregunta($id_pregunta, $pregunta);
//echo $idPreguntaM;
///4. DEVOLVER UN MENSAJE A LA VISTA
if ($idPreguntaM) {
    $argumentos = "message=DATOS_MODIFICADOS&tipo=0001";
    header("Location: ../view/pregunta.php?" . $argumentos);
} else {
    $argumentos = "message=ERROR_AL_GUARDAR&tipo=0004";
    header("Location: ../view/pregunta.php?" . $argumentos);
}
?>