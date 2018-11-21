<?php

require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassEncuestas.php';
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
$titulo = $_POST['inputTitulo'];
$fecha = $_POST['inputFecha'];




////2. CONFIGURAR VARIABLES
$status=1;

///3.  ENVIAR DATOS AL MODELO
$Encuesta=new GenerarEncuestas();
$idEncuesta=$Encuesta->guardarEncuesta($titulo,$fecha,$status);
echo $idEncuesta;

if ($idEncuesta) {
    $argumentos = "message=DATOS_GUARDADOS&tipo=0001";
    header("Location: ../view/inquiry.php?" . $argumentos);
} else {
    $argumentos = "message=ERROR_AL_GUARDAR&tipo=0004";
    header("Location: ../view/inquiry.php?" . $argumentos);
}






///$sql="INSERT INTO asignacion( edificio, area) VALUES ('".$edificio."','".$area."')";


?>
