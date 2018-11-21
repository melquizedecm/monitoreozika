<?php
require_once '../lib/consultas.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author PoloX
 */
class Usuarios {
    //put your code here
    function getUsuarios(){
        return getTabla("usuario");
    }
    
    function getPreguntas(){
        return getTabla("preguntas");
    }
}
