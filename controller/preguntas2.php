<?php
$mysqli = new mysqli('localhost', 'monitor7_ulises', 'monitor135790', 'monitor7_zika');
$id=$_POST['obtuvoid'];
if (isset($_POST['btnaceptar'])) {
	$resul=(int) $_POST["respuesta_edad"];
	$mysql2="UPDATE respuesta_usuarios SET edad='$resul' WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
    include ("../view/encuestasContestar5.php");
    
}elseif (isset($_POST['btnaceptar1'])) {
    $resul=$_POST["respuesta_mes"];
	$mysql2="UPDATE respuesta_usuarios SET fecha='$resul' WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar6.php");
	
}elseif (isset($_POST['btnaceptar2'])) {
    $resul=(int) $_POST["respuesta_dia"];
	$mysql2="UPDATE respuesta_usuarios SET dias='$resul' WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
    include ("../view/encuestasContestar10.php");
}