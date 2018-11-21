<?php
$mysqli = new mysqli('localhost', 'monitor7_ulises', 'monitor135790', 'monitor7_zika');
$id=$_POST['obtuvoid'];
if($_POST["respuesta"]=="si"){
	$mysql="UPDATE respuesta_usuarios SET analisis=1 WHERE id_respuestausuarios LIKE $id";
	$myQry= $mysqli->query($mysql);
	include ("../view/encuestasContestar2.php");

}elseif ($_POST["respuesta"]=="no") {
	$mysql="UPDATE respuesta_usuarios SET analisis=0 WHERE id_respuestausuarios LIKE $id";
	$myQry= $mysqli->query($mysql);
	include ("../view/encuestasContestar2.php");

}
elseif ($_POST["respuesta"]=="Si") {
	$mysql2="UPDATE respuesta_usuarios SET resultado=1 WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar7.php");
	
}elseif ($_POST["respuesta"]=="No") {
	$mysql2="UPDATE respuesta_usuarios SET resultado=0 WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar7.php");

}elseif ($_POST["respuesta"]=="Hombre") {
	$resul=$_POST["respuesta"];
	$mysql2="UPDATE respuesta_usuarios SET genero=0 WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar4.php");

}elseif ($_POST["respuesta"]=="Mujer") {
	$resul=$_POST["respuesta"];
	$mysql2="UPDATE respuesta_usuarios SET genero=1 WHERE id_respuestausuarios LIKE $id";
	$resultado2= $mysqli->query($mysql2);
	include ("../view/encuestasContestar4.php");

}
/*
elseif($_POST["respuesta"]=="2014"){
	$respuesta=(int) $_POST["respuesta"];
	$mysql="SELECT * FROM respuesta_usuarios";
	$resultado= $mysqli->query($mysql);
	while ($fila = mysqli_fetch_array($resultado)) {
		$resul=$fila['id_respuestausuarios'];
	}
	$mysql2="UPDATE respuesta_usuarios SET anio=$respuesta WHERE id_respuestausuarios LIKE $resul";
	$resultado2= $mysqli->query($mysql2);
	header("Location:./encuestasContestar3.php");

}elseif($_POST["respuesta"]=="2015"){
	$respuesta=(int) $_POST["respuesta"];
	$mysql="SELECT * FROM respuesta_usuarios";
	$resultado= $mysqli->query($mysql);
	while ($fila = mysqli_fetch_array($resultado)) {
		$resul=$fila['id_respuestausuarios'];
	}
	$mysql2="UPDATE respuesta_usuarios SET anio=$respuesta WHERE id_respuestausuarios LIKE $resul";
	$resultado2= $mysqli->query($mysql2);
	header("Location:./encuestasContestar3.php");

}elseif ($_POST["respuesta"]=="2016") {
	$respuesta=(int) $_POST["respuesta"];
	$mysql="SELECT * FROM respuesta_usuarios";
	$resultado= $mysqli->query($mysql);
	while ($fila = mysqli_fetch_array($resultado)) {
		$resul=$fila['id_respuestausuarios'];
	}
	$mysql2="UPDATE respuesta_usuarios SET anio=$respuesta WHERE id_respuestausuarios LIKE $resul";
	$resultado2= $mysqli->query($mysql2);
	header("Location:./encuestasContestar3.php");

}elseif ($_POST["respuesta"]=="2017") {
	$respuesta=(int) $_POST["respuesta"];
	$mysql="SELECT * FROM respuesta_usuarios";
	$resultado= $mysqli->query($mysql);
	while ($fila = mysqli_fetch_array($resultado)) {
		$resul=$fila['id_respuestausuarios'];
	}
	$mysql2="UPDATE respuesta_usuarios SET anio=$respuesta WHERE id_respuestausuarios LIKE $resul";
	$resultado2= $mysqli->query($mysql2);
	header("Location:./encuestasContestar3.php");

}
*/


// ESTE METODO ES EL QUE NOS VA A REDIRECCIONAR A LA URL DE LA SIGUIENTE PREGUNTA
//header('Location: '.$url);
// CIERRA EL PHP Y NOS MANLA A LA SIGUIENTE PREGUNTA SIN SALIR DE LA PAGINA EN LA QUE ESTAMOS
//die();

// ESPERO VER MI NOMBRE EN TUS AGRADECIMIENTOS DE TITULACION
?>