<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class GenerarCasos {

    function guardarCasos($caso,$color,$status) {
        $sql = "INSERT casos (caso, status, color) VALUES ('" . $caso . "', '" . $color . "', '" . $status . "')";
         return getResultSQL($sql);
    }
    function getCasos() {
        return getFila($sql);
    }
     function modificarCasos($id_casos, $caso, $color) {
        $sql = "UPDATE casos SET caso='" . $caso . "', color='" . $color . "' WHERE id_casos='" . $id_casos . "'";
        return getResultSQL($sql);
    }

    function getCasosM() {
        return getFila($sql);
    }
    function eliminarCasos($id_casos, $casos) {
        $sql = "DELETE FROM casos  WHERE id_casos='" . $id_casos . "'";
        return getResultSQL($sql);
    }

    function getCasosE() {
        return getFila($sql);
    }
    function relacionarCasos($id_encuesta,$id_pregunta,$id_respuesta) {
        $sql = "INSERT casos_relacionar (id_encuesta, id_pregunta, id_respuesta) VALUES ('" . $id_encuesta . "', '" . $id_pregunta . "', '" . $id_respuesta . "')";
         return getResultSQL($sql);
    }
    function getCasosR() {
        return getFila($sql);
    }

    


}