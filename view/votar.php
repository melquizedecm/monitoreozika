<?php
require_once("../lib/links.php");
require_once("../lib/consultas.php");
require_once("../controller/preguntaModificar.php");
libnivel2();

		
//Obtenemos el titulo de la encuesta
$sql = "SELECT titulo FROM encuestas ORDER BY fecha DESC LIMIT 1,0";
$tabla = getResultSQL($sql);
$lado=mysql_num_rows($sql);
while($row = mysql_fetch_array($sql)){ 
	$titulo= $row['titulo'];
}
		
//Obtenemos el numero actual de votos para la opción elegida
//Comprobamos si $opcion no está vacío porque posteriormente este mismo 
//fichero lo utilizaremos para ver resultados sin tener que votar necesariamente
if(!empty($opcion)) {
	$consulta = "SELECT votos FROM respuestas WHERE id=$opcion"; 
	$consulta = mysql_query($consulta,$enlace); 
	$lado=mysql_num_rows($consulta);
	while($row = mysql_fetch_array($consulta)){ 
		$votos= $row['votos'];
	}
		
//Incrementamos en uno los votos totales
	$votos = $votos + 1;
//Y actualizamos la base de datos
	$consulta = "UPDATE respuestas SET votos = $votos WHERE id=$opcion";
	mysql_query($consulta,$enlace);
}
?>