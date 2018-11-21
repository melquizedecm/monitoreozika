<?php

require("phpsqlajax_dbinfo.php");

function parseToXML($htmlStr) {
    $xmlStr = str_replace('<', '&lt;', $htmlStr);
    $xmlStr = str_replace('>', '&gt;', $xmlStr);
    $xmlStr = str_replace('"', '&quot;', $xmlStr);
    $xmlStr = str_replace("'", '&#39;', $xmlStr);
    $xmlStr = str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}

// Creamos una conexion y seleccionando la tabla (host,usuario,contrase«Ða,base de datos)
$conexion = new mysqli('localhost', 'monitor7_ulises', 'monitor135790', 'monitor7_zika');

#Extraer todas las filas
$consulta = "SELECT * FROM markers";
$resultado = $conexion->query($consulta);

//Definimos el tipo de contenido, en nuestro caso texto XML
header("Content-type: text/xml");

// Inicializamos el archivo XML
echo '<markers>';

// Iteramos las columnas e imprimimos XML nodes por cada uno
while ($row = $resultado->fetch_array()) {
    // Agregar XML document node
    echo '<marker ';
    echo 'name="' . parseToXML($row['name']) . '" ';
    echo 'address="' . parseToXML($row['address']) . '" ';
    echo 'lat="' . $row['lat'] . '" ';
    echo 'lng="' . $row['lng'] . '" ';
    echo 'type="' . $row['type'] . '" ';
    echo '/>';
}

// Fin Archivo XML
echo '</markers>';
?>