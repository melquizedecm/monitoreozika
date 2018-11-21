<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuarios {

    function guardarUsuario($name_user, $password_user, $type_user, $status_user) {
        $sql = "INSERT INTO usuarios(name_user, password_user,status_user,type_user) VALUES ('" . $name_user . "','" . $password_user . "','" . $type_user . "', '" . $status_user . "')";
        return getResultSQL($sql);
        
    }
    function getUsuarios() {
        return getFila($sql);
    }
 
    function modificarUsuario($id_user, $name_user, $password_user) {
        $sql = "UPDATE usuarios SET name_user='" . $name_user . "', password_user='" . $password_user . "' WHERE id_user='" . $id_user . "'";
        return getResultSQL($sql);
    }

    function getusuarioM() {
        return getFila($sql);
    }

    function eliminarUsuario($id_user, $name_user) {
        $sql = "DELETE FROM usuarios  WHERE id_user='" . $id_user . "'";
        return getResultSQL($sql);
    }

    function getUsuarioE() {
        return getFila($sql);
    }

   
}