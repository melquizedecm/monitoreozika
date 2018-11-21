<?php   
function get_id() {
    $mysqli = mysqli_connect("localhost", "monitor7_ulises", "monitor135790", "monitor7_zika");
    //if(isset($_POST['btnComenzar'])){
    $miLatitud = $_GET["lat"];
    $miLongitud = $_GET["lon"];
    $consulta = "SELECT MAX(id_respuestausuarios) as maximo FROM respuesta_usuarios";
    $resultado = $mysqli->query($consulta);
    $fila = mysqli_fetch_array($resultado);
    $id = $fila['maximo'];
    $newid = $id + 1;
    if ($newid > $id) {
        $_SESSION['ID'] = $newid;
        $id = $_SESSION['ID'];
        $mysql = "INSERT INTO respuesta_usuarios(id_respuestausuarios, latitud, longitud) VALUES ('" . $newid . "','" . $miLatitud . "','" . $miLongitud . "')";
        $resultado = $mysqli->query($mysql);
        if (!$resultado){
            echo $mysqli->error;
        }
        return $newid;
    }
    //}
}