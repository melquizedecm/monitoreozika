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
require_once '../model/ClassPreguntasRespuestas.php';
libnivel2();
///1. RECUPERAR DATOS
$pregunta = $_POST['pregunta'];
$idEncuesta = $_POST['idEncuesta'];
////2. CONFIGURAR VARIABLES
$status=1;
///3.  ENVIAR DATOS AL MODELO
$Pregunta=new PreguntasRespuestas();
$idPregunta=$Pregunta->guardarPregunta($pregunta,$status,$idEncuesta);
echo $idPregunta;
?>
