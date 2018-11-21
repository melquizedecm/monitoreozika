<?php

function nombreUsuario($usuario){
$sql="SELECT nombre FROM usuario WHERE usuario ='".$usuario."' ";
    $tablaForm = getResultSQL($sql);
    $filaNombre = $tablaForm->fetch_array(MYSQLI_BOTH);
    $usuarioNombre=$filaNombre[0];
    return $usuarioNombre;
}