<?php
require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassPreguntasRespuestas.php';
libnivel2();


function obtenerPregunta($id){
$sql = "SELECT * FROM preguntas WHERE id_pregunta='".$id."'";
$tabla2 = getResultSQL($sql);
$row = $tabla2->fetch_array(MYSQLI_BOTH);
return $row;
}
