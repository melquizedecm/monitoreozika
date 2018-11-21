<?php
require_once("obtenerid.php");
$id = get_id();
$miLatitud = $_GET["lat"];
$miLongitud = $_GET["lon"];
require_once("../view/encuestasContestar1.php");

