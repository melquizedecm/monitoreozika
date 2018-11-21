<?php
require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassCasos.php';
libnivel2();


function obtenerCaso($id){
$sql = "SELECT * FROM casos WHERE id_casos='".$id."'";
$tabla2 = getResultSQL($sql);
$row = $tabla2->fetch_array(MYSQLI_BOTH);
return $row;
}