<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class GenerarEncuestas {

    function guardarEncuesta($titulo, $fecha, $status) {
        $sql = "INSERT INTO encuestas(titulo,fecha, status) VALUES ('" . $titulo . "', '" . $fecha . "', '" . $status . "')";
         return getResultSQL($sql);
    }
    function getEncuesta() {
        return getFila($sql);
    }
    function modificarEncuesta($idEncuesta, $titulo, $fecha) {
        $sql = "UPDATE encuestas SET titulo='" . $titulo . "', fecha='" . $fecha . "' WHERE idEncuesta='" . $idEncuesta . "'";
        return getResultSQL($sql);
    }

    function getEncuestaM() {
        return getFila($sql);
    }
    function eliminarEncuesta($idEncuesta, $titulo) {
        $sql = "DELETE FROM encuestas WHERE idEncuesta='" . $idEncuesta . "'";
        return getResultSQL($sql);
    }

    function getPreguntasE() {
        return getFila($sql);
    }

    


}