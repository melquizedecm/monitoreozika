<?php
require_once("../lib/links.php");
libnivel1();
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
        <link href="letras.css" rel="stylesheet" type="text/css"/>
        <link href="../lib/css2/letras.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .background 
            {
                background-image: url('../img/logo1.jpg');
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .rcorners {
                border-radius: 25px;
                background: red;
                padding: 20px;  
            }
            .blanco{
                color:white;
            }
        </style>

    </head>
    <body class="background">
        <div class="col-md-6 col-lg-6 col-sm-8 col-xs-11 navbar-fixed-bottom rcorners text-center" style="margin-bottom: 5%;margin-left:10px;margin-right:10px;margin-top: 10%">
            <div id="pregunta1">
                <form action="../controller/preguntas.php" method="post" id="myForm">
                    <?php
                    $aux = 0;
                    $sql = "SELECT * FROM preguntas INNER JOIN respuesta ON preguntas.id_pregunta=respuesta.id_pregunta WHERE preguntas.id_pregunta='112'";
                    $tabla = getResultSQL($sql);
                    while ($row = $tabla->fetch_array(MYSQLI_BOTH)) {
                        if ($aux == 0) {
                            ?>
                            <h1 id="pregunta1" name="pregunta1" class"blanco" style="color:white"><?php echo $row['pregunta'] ?></h1>
                            <ul id="respuesta1" name="respuesta1"  class="votacion index">
                                <?php $aux = 1;
                            }
                            ?>
                            <li style="cursor: pointer"><h5><?php echo $row['respuesta'] ?></h5></li>
                            <?php
                        }
                        ?>
                        <input type="hidden" name="obtuvoid" id="obtuvoid" value="<?php echo $id; ?>"/>
                        <input type="hidden" name="latitud" id="latitud" value="<?php echo $miLatitud; ?>">
                        <input type="hidden" name="latitud" id="latitud" value="<?php echo $miLongitud; ?>">
                        <input type="hidden" name="respuesta" id="respuesta">
                        <input type="hidden" name="url" id="url" value="encuestasContestar2.php">
                    </ul>

                    <a href="../view/zika.php" class="volver">&larr; Volver</a>
                </form>  
            </div>

        </div>


        <!--div class="bgimg-1 w3-display-container " id="home">
            <div class="center w3-display-middle" style="white-space:nowrap;" >
                <div class="wrap" align="center" id="aqui" name="aqui">
                    <div id="pregunta1" name="pregunta1">
                        <form action="../controller/preguntas.php" method="post" id="myForm">
        <?php
        $aux = 0;
        $sql = "SELECT * FROM preguntas INNER JOIN respuesta ON preguntas.id_pregunta=respuesta.id_pregunta WHERE preguntas.id_pregunta='112'";

        $tabla = getResultSQL($sql);
        while ($row = $tabla->fetch_array(MYSQLI_BOTH)) {
            if ($aux == 0) {
                ?>
                                                <h1 id="pregunta1" name="pregunta1"><?php echo $row['pregunta'] ?></h1>
                                                <ul id="respuesta1" name="respuesta1"  class="votacion index">
                <?php $aux = 1;
            }
            ?>
                                        <li style="cursor: pointer"><h5><?php echo $row['respuesta'] ?></h5></li>
    <?php
}
?>
                                    <input type="hidden" name="obtuvoid" id="obtuvoid" value="<?php echo $id; ?>">
                                    <input type="hidden" name="latitud" id="latitud" value="<?php echo $miLatitud; ?>">
                                    <input type="hidden" name="latitud" id="latitud" value="<?php echo $miLongitud; ?>">
                                    <input type="hidden" name="respuesta" id="respuesta">
                                    <input type="hidden" name="url" id="url" value="encuestasContestar2.php">
                                </ul>
    
                                <a href="../view/zika.php" class="volver">&larr; Volver</a>
                        </form>  
                    </div>
                </div>
            </div>
        </div-->
        <script>
            var a = document.getElementById('respuesta1').getElementsByTagName('li');
            for (var i = 0; i < a.length; i++)
            {
                a[i].onclick = function ()
                {
                    // PRIMERO ELIMINO EL "<h5>" DEL PRINCIPIO Y LO REEMPLAZO POR VACIO Y LO GUARDO EN LA VARIABLE "r1"
                    var r1 = this.innerHTML.replace("<h5>", "");
                    // LUEGO ELIMINO EL "</h5>" DEL FINAL Y LO REEMPLAZO POR VACIO Y LO GUARDO EN LA VARIABLE "r2"
                    var r2 = r1.replace("</h5>", "");
                    // AGREGAMOS LA RESPUESTA SIN ETIQUETAS AL INPUT INVISIBLE VACIO QUE CREAMOS DE PRIMERO EN EL FORMULARIO
                    document.getElementById('respuesta').value = r2;
                    // SIMULAMOS UN SUBMIT CON JAVASCRIPT
                    document.getElementById("myForm").submit();
                    // AHORA VE AL PHP LLAMADO  php_que_inserta_datos_en_segundo_plano.php

                }
            }
        </script>
    </body>
</html>