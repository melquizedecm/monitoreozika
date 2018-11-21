<?php
$mysqli = new mysqli('localhost', 'monitor7_ulises', 'monitor135790', 'monitor7_zika');
$id=$_POST['obtuvoid'];
//echo $_POST["respuesta"]; 
if ($_POST["respuesta"]=="Sí, y hay comezón.") {
    $resul=$_POST["respuesta"];
  //echo $resul;
	$mysql2="UPDATE respuesta_usuarios SET exantema=1 WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar3.php");
	
}elseif ($_POST["respuesta"]=="Sí, pero no hay comezón.") {
    $resul=$_POST["respuesta"];
    //echo $resul;
	$mysql2="UPDATE respuesta_usuarios SET exantema=0 WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar3.php");

}elseif ($_POST["respuesta"]=="No") {
	$mysql2="UPDATE respuesta_usuarios SET exantema='0' WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar3.php");

}