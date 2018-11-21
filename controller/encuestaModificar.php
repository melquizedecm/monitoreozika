<?php
require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassEncuestas.php';
libnivel2();


function obtenerEncuesta($id){
$sql = "SELECT * FROM encuestas WHERE idEncuesta='".$id."'";
$tabla3 = getResultSQL($sql);
$row = $tabla3->fetch_array(MYSQLI_BOTH);
return $row;
}