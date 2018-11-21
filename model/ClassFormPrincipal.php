<?php

/* 
 * Nombre del Programa: ClassFormPrincipal.php
 * Autores: Apolo Tiburcio Colorado ,Melquizedec Moo Medina
 * 
 * Descripcion: MODELO que ayud a crear los modulso para cada tipo de rol de usuario.
 * 
 *  1. VERIFICAR QUE MODULOS TIENE HABILITADO EL USUARIO OBTENER LA TABLA DE MODULOS FILTRADO POR USUARIO
 *  1A. OBTENER LA FILA DE CONFIGURACIÓN DEL USUARIO
 *  1A. RECORRER LA FILA PARA OBTENER EL NOMBRE DE LOS MODULOS
 *  2. GENERAR LA TABLA CON LOS MODULOS HABILITADOS DEL USUARIO
 *  
 * 
 */
class FormPrincipal {
    function getModulos($rol) {
        /////////1. OBTENER LA TABLA DE MODULOS FILTRADO POR USUARIO//////////
        require_once 'ClassUsuarioConfiguracion.php';
        $objUsuario= new ClassUsuarioConfiguracion();
        $modulos=$objUsuario->getModulosRol($rol);
        echo " <div class='row' style='margin-left:0 auto;' >";
        while ($fila = $modulos->fetch_array(MYSQLI_BOTH)) {
            /////IMPRIMIR CADA BOTÓN DE LOS MODULOS
            echo " <div class='col-xs-4 col-md-3 col-lg-3 ' >";
            echo "<a href='" . $fila['modulo'] . ".php'><img class='photo_list' src='../img/" . $fila['modulo'] . ".png'>";
            echo "<div id='tituloMenu'>".$fila['modulo']."</div></a>";
            echo "</div>  <!--  END COL -->";
        }
        echo "</div>      <!--  END ROW -->";
    }
}	
?> 