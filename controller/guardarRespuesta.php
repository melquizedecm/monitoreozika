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
$respuesta = $_POST['respuesta'];
$idPregunta=$_POST['idPregunta'];

////2. CONFIGURAR VARIABLES


///3.  ENVIAR DATOS AL MODELO
$Respuesta=new GuardarRespuestas();
$idRespuesta=$Respuesta->guardarRespuesta($respuesta, $idPregunta);
echo $idRespuesta;





///$sql="INSERT INTO asignacion( edificio, area) VALUES ('".$edificio."','".$area."')";
