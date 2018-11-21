<?php
$mysqli = new mysqli('localhost', 'monitor7_ulises', 'monitor135790', 'monitor7_zika');
$id=$_POST['obtuvoid'];
if ($_POST["respuesta"]=="Si") {
	$mysql2="UPDATE respuesta_usuarios SET prurito='1' WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("preguntasRecorrer.php");
	
}elseif ($_POST["respuesta"]=="No") {
	$mysql2="UPDATE respuesta_usuarios SET prurito='0' WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("preguntasRecorrer.php");

}