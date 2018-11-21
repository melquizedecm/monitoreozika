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
$caso = $_POST['inputCaso'];
$color = $_POST['inputColor'];

////2. CONFIGURAR VARIABLES
$status=1;
///3.  ENVIAR DATOS AL MODELO
$CasoNuevo=new GenerarCasos();
$idCaso=$CasoNuevo->guardarCasos($caso,$status,$color);
//echo $idPreguntaM;
///4. DEVOLVER UN MENSAJE A LA VISTA
if ($idCaso) {
    $argumentos = "message=DATOS_AGREGADOS&tipo=0001";
    header("Location: ../view/casosRelacionar.php?" . $argumentos);
} else {
    $argumentos = "message=ERROR_AL_AGREGAR&tipo=0004";
    header("Location: ../view/casosGenerar.php?" . $argumentos);
}
?>