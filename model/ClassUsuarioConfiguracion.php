<?php
/* 
 * Nombre del Programa: ClassSolicitudCompleta.php
 * Autores: Apolo Tiburcio Colorado ,Melquizedec Moo Medina
 * 
 * Descripcion:  Clase que involucra todas las consultas correspondientes a los datos de la tabla
 * SOLICITUD COMPLETA
 * 
 * 1.  LLAMAMOS A LA FUNCION
 * 
 */
class ClassUsuarioConfiguracion {
    ////1. LLAMAMOS A LA FUNCION
    function getModulosRol($rol){
        return getTablaWhere("modulo_rol", "roles", $rol);
    }
}
