<?php

require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassCasos.php';
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
$id_casos = $_REQUEST['id'];
$caso = $_POST['casos'];
$color =$_POST['color'];



////2. CONFIGURAR VARIABLES
///3.  ENVIAR DATOS AL MODELO
$CasosM = new GenerarCasos();
$idCasosM = $CasosM->modificarCasos($id_casos, $caso, $color);
//echo $idPreguntaM;
///4. DEVOLVER UN MENSAJE A LA VISTA
if ($idCasosM) {
    $argumentos = "message=DATOS_MODIFICADOS&tipo=0001";
    header("Location: ../view/tablaCasos.php?" . $argumentos);
} else {
    $argumentos = "message=ERROR_AL_GUARDAR&tipo=0004";
    header("Location: ../view/tablaCasos.php?" . $argumentos);
}
?>