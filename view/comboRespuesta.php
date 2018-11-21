<?php

require_once("../lib/consultas.php");
require_once("../lib/links.php");
libnivel2();
/*
 * Nombre de la vista: comboProblema.php
 * Autores: Apolo Tiburcio Colorado ,Melquizedec Moo Medina
 * 
 * Descripcion:  Interfaz que nos permite vizualizar los datalist usando los daatos de la tabla problema
 * 
 * 1.  LLAMAMOS A LA FUNCION A LOS HEADERS
 * 2.  CONSULTA EN LA BASE DE DATOS
 * 3.  CREAR EL DATALIST
 */
///RECEPCION DE DATOS
   $idPregunta=$_POST['idPregunta'];
//$idPregunta =$_POST['id_pregunta'];
///CONSULTA EN LA BASE DE DATOS
$sql = "SELECT *  FROM respuesta WHERE id_pregunta = '" . $idPregunta . "'";
$tablaForm = getResultSQL($sql);
//CREAR EL DATALIST
echo "<select  id='selectRespuesta' name='selectRespuesta' >";
while ($fila = $tablaForm->fetch_array(MYSQLI_BOTH)) {
    echo "<option  value='" . $fila['id_respuesta'] . "'>" . $fila['respuesta'] . "</option>";
}
echo "</select>";

