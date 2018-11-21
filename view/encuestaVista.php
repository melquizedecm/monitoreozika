  <?php
require_once("../lib/links.php");
require_once("../lib/consultas.php");
require_once("../controller/preguntaModificar.php");
libnivel2();
/* @var $_POST type */
$sql = "SELECT * FROM encuestas";
$tabla = getResultSQL($sql);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sistema de encuestas</title>
	<link rel="stylesheet" href="encuestas.css">
        <link rel="stylesheet" href="../lib/css2/encuestas.css">
        
</head>
<body>
    <div class="wrap">
    	<h1>Encuestas</h1>
    	<ul class="votacion index">
		<?php
			while ($row = $tabla->fetch_array(MYSQLI_BOTH)){
				echo "<li><a href=encuesta.php?id=".$row['idEncuesta'].">".$row['titulo']."</a></li>";
			}
		?>
		</ul>
        <a href="inquiry.php">+ Agregar nueva encuesta</a>
	</div>
</body>
</html>