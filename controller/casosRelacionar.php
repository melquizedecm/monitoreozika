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
require_once '../model/ClassCasos.php';
libnivel2();
///1. RECUPERAR DATOS
$id_encuesta = $_POST['selectEncuesta'];
$id_pregunta = $_POST['selectPregunta'];
$id_respuesta = $_POST['selectRespuesta'];

////2. CONFIGURAR VARIABLES

///3.  ENVIAR DATOS AL MODELO
$CasoRelacionar=new GenerarCasos();
$idCasoRelacionar=$CasoRelacionar->relacionarCasos($id_encuesta,$id_pregunta,$id_respuesta);
//echo $idPreguntaM;
///4. DEVOLVER UN MENSAJE A LA VISTA
if ($idCasoRelacionar) {
    $argumentos = "message=DATOS_AGREGADOS&tipo=0001";
    header("Location: ../view/tablaCasos.php?" . $argumentos);
} else {
    $argumentos = "message=ERROR_AL_AGREGAR&tipo=0004";
    header("Location: ../view/tablaCasos.php?" . $argumentos);
}
?>

