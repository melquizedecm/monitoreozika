<?php
require_once("../lib/consultas.php");
require_once '../lib/links.php';
require_once '../model/ClassUsuarios.php';
libnivel2();


function obtenerUsuario($id){
$sql = "SELECT * FROM usuarios WHERE id_user='".$id."'";
$tabla = getResultSQL($sql);
$row = $tabla->fetch_array(MYSQLI_BOTH);
return $row;
}

