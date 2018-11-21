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
    $inventario=$_POST['inventario'];
    ///CONSULTA EN LA BASE DE DATOS
    $sql="SELECT problema  FROM problema_inventario WHERE inventario= '".$inventario."'";
    $tablaForm = getResultSQL($sql);
    ///CREAR EL DATALIST
    echo "<datalist id='problemaDataList'>";
    echo "<select  id='selectProblema' name='selectProblema' >";
        while($fila = $tablaForm->fetch_array(MYSQLI_BOTH)){
        echo "<option  value='".$fila[0]."'>".$fila[0]."</option>";
 }
 echo "</select>"
 . "</datalist>";
 echo "<input class='form-control text-center' placeholder='Diga su problema con el inventario' style='width:100%' type='text' list='problemaDataList' name='problema'  style='text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();' required>";
 ?>

