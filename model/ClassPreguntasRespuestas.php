<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PreguntasRespuestas {

    function guardarPregunta($pregunta, $status,$idEncuesta) {
        $sql = "INSERT INTO preguntas(pregunta, status, id_encuesta) VALUES ('" . $pregunta . "', '" . $status . "', '" . $idEncuesta . "')";
        if (getResultSQL($sql)) {
            return $this->getIdUltimaPregunta();
        } else {
            return false;
        }
    }

    function getIdUltimaPregunta() {
        $sql = "SELECT MAX(id_pregunta) AS id_pregunta FROM preguntas";
        $fila = getFilaSql2($sql);
        return $fila['id_pregunta'];
    }

    function getPreguntas() {
        return getTabla('preguntas');
    }

    function modificarRespuesta($id_respuesta, $respuesta) {
        $sql = "UPDATE respuesta SET respuesta='" . $respuesta . "' WHERE id_respuesta='" . $id_respuesta . "'";
        return getResultSQL($sql);
    }

    function getPreguntasM() {
        return getFila($sql);
    }

    function modificarPregunta($id_pregunta, $pregunta) {
        $sql = "UPDATE preguntas SET pregunta='" . $pregunta . "' WHERE id_pregunta='" . $id_pregunta . "'";
        return getResultSQL($sql);
    }

    function getPreguntasModificar() {
        return getFila($sql);
    }

    function eliminarRespuesta($id_respuesta, $respuesta) {
        $sql = "DELETE FROM respuesta  WHERE id_respuesta='" . $id_respuesta . "'";
        return getResultSQL($sql);
    }

    function getPreguntasE() {
        return getFila($sql);
    }

    function eliminarPregunta($id_pregunta, $pregunta) {
        $sql = "DELETE FROM preguntas  WHERE id_pregunta='" . $id_pregunta . "'";
        return getResultSQL($sql);
    }

    function getPreguntasEliminar() {
        return getFila($sql);
    }

}

class GuardarRespuestas {

    function guardarRespuesta($respuesta, $idPregunta) {
        $sql = "INSERT INTO respuesta(respuesta, id_pregunta) VALUES ('" . $respuesta . "', '" . $idPregunta . "')";
        return getResultSQL($sql);
    }

    function getRespuesta() {
        return getFila($sql);
    }

}
