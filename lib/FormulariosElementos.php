<?php
require_once("../lib/consultas.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of FormulariosElementos
 *
 * @author PoloX
 */
class FormulariosElementos {

    function comboBox($tabla,$campo) {
     $sql="SELECT ".$campo." FROM ".$tabla;
     $tablaForm = getResultSQL($sql);
    //echo "<label>".$campo."</label>";
    echo "<select class='text-center form-control' style='width:100%'  name='".$campo."' required>";
        while($fila = $tablaForm->fetch_array(MYSQLI_BOTH)){
           echo "<option  value='".$fila[0]."'>".$fila[0]."</option>";
        }
    echo "</select>";
    }
    
        function comboBoxWhere($tabla,$campo) {
     $sql="SELECT ".$campo." FROM ".$tabla." WHERE edificio = 'O'";
     $tablaForm = getResultSQL($sql);
    //echo "<label>".$campo."</label>";
    echo "<select  name='".$campo."' required>";
        while($fila = $tablaForm->fetch_array(MYSQLI_BOTH)){
           echo "<option  value='".$fila[0]."'>".$fila[0]."</option>";
        }
    echo "</select>";
    }
    
//    function comboBox2($tabla,$campo) {
//     $sql="SELECT ".$campo." FROM ".$tabla." INNER JOIN usuario_area ON usuario_area.usuario = usuario.usuario ";
//     $tablaForm = getResultSQL($sql);
//    //echo "<label>".$campo."</label>";
//    echo "<select  name='".$campo."' required>";
//        while($fila = $tablaForm->fetch_array(MYSQLI_BOTH)){
//           echo "<option  value='".$fila[0]."'>".$fila[0]."</option>";
//        }
//    echo "</select>";
//    }
    
    function dataList(){
        
    }
    
    
    
}
