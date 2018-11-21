<?php
require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassPreguntasRespuestas.php';
libnivel2();


function obtenerRespuesta($id){
$sql = "SELECT * FROM respuesta WHERE id_respuesta='".$id."'";
$tabla = getResultSQL($sql);
$row = $tabla->fetch_array(MYSQLI_BOTH);
return $row;
}


