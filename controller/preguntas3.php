<?php
$mysqli = new mysqli('localhost', 'monitor7_ulises', 'monitor135790', 'monitor7_zika');
$id=$_POST['obtuvoid'];
if ($_POST["respuesta"]=="De 35° a 37°") {
	$resul=$_POST["respuesta"];
	$mysql2="UPDATE respuesta_usuarios SET fiebre=0 WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
        include ("../view/encuestasContestar8.php");

}
elseif ($_POST["respuesta"]=="De 38° a 40°") {
	$resul=$_POST["respuesta"];
	$mysql2="UPDATE respuesta_usuarios SET fiebre=1 WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar8.php");

}elseif ($_POST["respuesta"]=="No") {
	$mysql2="UPDATE respuesta_usuarios SET fiebre='0' WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar8.php");

}