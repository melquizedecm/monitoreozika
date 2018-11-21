<?php

function libnivel1() {
    //require_once("../lib/session.php");
    //require_once("lib/paginasElementos.php");
    require_once("../lib/links.php");
    //require_once("lib/header.php");
    //require_once("lib/movhistory.php");
    require_once("../lib/consultas.php");
}

function libnivel2() {
    //require_once("../lib/movhistory.php");
    //require_once("../lib/meta.php");
    require_once("../lib/session.php");
    //require_once("../lib/paginasElementos.php");
    //require_once("../lib/header.php");
    require_once("../core/config.php");
    require_once("../lib/consultas.php");
    //require_once("../lib/enviarCorreos.php");
    //require_once("../lib/generals.php");
    //require_once("../lib/PHPMaileMaster/PHPMailerAutoload.php");
    //require_once("../lib/PHPMaileMaster/class.phpmailer.php");
}

function libnivel3() {
    require_once("../../lib/session.php");
    require_once("../../lib/paginasElementos.php");
    require_once("../../lib/header.php");
    require_once("../../lib/config.php");
    require_once("../../lib/movhistory.php");
    require_once("../../lib/consultas.php");
}

?>