<?php

/* 
 * Nombre del Programa: index.php
 * Autores: Apolo Tiburcio Colorado ,Melquizedec Moo Medina
 * 
 * Descripcion: CONTROLADOR que permite obetener los usuarios para uso.
 * 
 * 1.	MANDAR DATOS
 * 
 */

//////////1. MANDAR DATOS /////////////
class Index{
    function getUsuarios($link){
        $usuarios=new UsuariosTest();
        $tabla = $usuarios->getTabla($link);
        while($fila=$tabla->fetch_array(MYSQL_BOTH)){
            echo $fila['usuario'];
        }
    }
}
