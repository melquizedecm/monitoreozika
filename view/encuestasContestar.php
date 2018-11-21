<?php
require_once("../lib/links.php");
require_once("../lib/consultas.php");
require_once("../controller/preguntaModificar.php");
libnivel2();
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <script src="../lib/js/jquery-1.12.3.js" type="text/javascript"></script>
        <meta charset="UTF-16">
        <title>Sistema de encuestas</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="encuestas.css">
        <link rel="stylesheet" href="../lib/css2/encuestas.css">
        <link href="../lib/css2/letras.css" rel="stylesheet" type="text/css"/>
       <!-- <script>
            $(document).ready(function(){
            $("#respuesta").click(function(){
            vrespuesta = document.getElementById("respuesta").value;
            alert(vrespuesta);
                //$.post("../controller/respuesta.php", {respuesta: vrespuesta, idEncuesta: vIdEncuesta}, function (data) {

            });
        });
        </script>-->
    </head>
    <body>

        <div class="wrap" align="center">
            <div id="idPregunta"> Da clic  </div>
            <form action="" method="post">
                <?php
                $aux = 0;

                $sql = "SELECT * FROM preguntas INNER JOIN respuesta ON preguntas.id_pregunta=respuesta.id_pregunta WHERE preguntas.id_pregunta='112'";

                $tabla = getResultSQL($sql);
                while ($row = $tabla->fetch_array(MYSQLI_BOTH)) {

                    if ($aux == 0) {
                        echo '<h1 id="pregunta1" name="pregunta1">' . $row['pregunta'] . '</h1>';

                        echo '<ul id="respuesta" name="respuesta"  class="votacion index">';
                        $aux = 1;
                    }



                    echo '<li  ><a   value="' . $row['id_respuesta'] . '"><h2>' . $row['respuesta'] . '</h2></a></li>';
                }




                echo '</ul>';


                if (!isset($_POST['valor'])) {

                    //echo "<div class='error'>Selecciona una opcion.</div>";
                }

                echo '<a href="informacion.php" class="volver">&larr; Volver</a>';
                ?>

            </form>
        </div>
        <script>
            var a = document.getElementById('respuesta').getElementsByTagName('li');
            for (var i = 0; i < a.length; i++)
            {
                a[i].onclick = function ()
                {
                    if (this.innerHTML.includes("si")) {

                        vrespuesta = this.innerHTML;
                      
                        $.post("../controller/respuesta1.php", {respuesta: vrespuesta}, function (data) {
                            
                            

                        });
                    }

                    else
                        document.getElementById("pregunta1").innerHTML = "nknkdv";
                }
            }

        </script>
    </body>
</html>