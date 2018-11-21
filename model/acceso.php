<?php

class Acceso{
    
    function getAcceso($usuario){
        $sql=" SELECT * FROM usuario WHERE tipoUsuario = '".$usuario."' ";
        return getResultSQL($sql);
    }
}

