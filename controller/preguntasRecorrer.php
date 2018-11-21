<?php
require_once '../lib/links.php';
libnivel1();
$id = $_POST['obtuvoid'];
$id;
$sql = "SELECT casos.color, respuesta_usuarios.latitud, respuesta_usuarios.genero, respuesta_usuarios.longitud, t1.ponderacion
FROM casos, respuesta_usuarios, casos_generados t1
WHERE casos.caso=t1.ponderacion and respuesta_usuarios.id_respuestausuarios='$id'
AND
EXISTS(
SELECT * FROM respuesta_usuarios t2
WHERE t2.id_respuestausuarios='$id' AND t2.fiebre=t1.fiebre and t1.conjuntivitis=t2.conjuntivitis and t1.exantema= t2.exantema and t1.dolor_articulaciones=t2.dolor_articulaciones AND t1.dolo_muscular=t2.dolor_muscular AND t1.dolor_cabeza=t2.dolor_cabeza and t1.analisis=t2.analisis AND t1.resultados=t2.resultado and t1.hinchazon_cuerpo=t2.hinchazon_cuerpo and t1.prurito=t2.prurito)";
$tabla = getResultSQL($sql);

while ($row = $tabla->fetch_assoc()) 
{
    $name = $row['genero'];  
    $address = $row['ponderacion'];
    $lat = $row['latitud'];
    $lng = $row['longitud'];
    $type = $row['color'];
    $mysql = "INSERT INTO markers (name, address,lat,lng,type) VALUES ('" . $name . "', '" . $address . "', '" . $lat . "', '" . $lng . "', '" . $type . "')";
    $resultado = $mysqli->query($mysql);
    
    
}
header('Location: ../maps/mapa2.php?ponderacion='.$row['ponderacion']);
?>
