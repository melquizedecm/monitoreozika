<?php
require_once("../lib/links.php");
libnivel2();
?>
<!DOCTYPE html>
<!--
/* 
 * Nombre de la vista: ver_registros.php
 * Autores: Apolo Tiburcio Colorado ,Melquizedec Moo Medina
 * 
 * Descripcion:  Interfaz que nos permite VER lso registrso y movimientos dentro del sistema que cambiso hubo y
 * quienes fueron lso que lo hicieron
 * 
 * 1.  LLAMAMOS A LA FUNCION A LOS HEADERS
 * 2.  SECCION DE JAVASCRIPT
 * 3.  CARGAMOS LA TABLA CUANDO INICIAMOS LA PAGINA
 * 4.  CARGAMOS LA TABLA CON BASE A LOS DATOS LOS MOVIEMITNES RECIENTES
 */-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ORDEN DE MANTENIMIENTO</title>
        <link href="../lib/bootstrap/css/bootstrap.css" rel="stylesheet">
         <!-- LLAMAMOS A LA FUNCION A LOS HEADERS -->
         <?php
        $cabecera = new meta;
        $cabecera->getMeta();
        ?>
       <!--/////////////SECCION DE JAVASCRIPT////////////-->
        <script language="javascript">
            function tablaDinamica() {
                $(document).ready(function () {
                    $('#tablaDinamica').DataTable();
                });
            }
            function fListar_Productos(form) {
                /// Aqui podemos enviarle alguna variable a nuestro script PHP
                var i = form.value;
                /// Invocamos a nuestro script PHP
                $.post("../view/listarMovimiento.php", {descripcion: i}, function (data) {
                    $("#listas").html(data);
                });
            }
        </script>
    </head>
    <!-- CARGAMOS LA TABLA CUANDO INICIAMOS LA PAGINA -->
    <body onload="tablaDinamica();">
        <header>
            <?php
            $encabezado = new header;
            $encabezado->getHeader();
            ?>
        </header>

    <center>

        <div id="listas">
            <div class="table-responsive">
                <table id="tablaDinamica" class="display" cellspacing="0" width="80%">
                    <?php
                     require_once 'solicitudLista.php';
                    ?>
                    <thead>
                        <tr>
                            <th> HORA Y FECHA </th>
                            <th> USUARIO </th>
                            <th> HOST </th>
                            <th> REGISTRO </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- CARGAMOS LA TABLA CON BASE A LOS DATOS LOS MOVIEMITNES RECIENTES -->
                        <?php
                        $consulta = "SELECT * FROM movhistorytbl ORDER BY id ASC";
                        $link = conectar();
                        if ($resultado = $link->query($consulta)) {
                            while ($fila = $resultado->fetch_array(MYSQLI_BOTH)) {
                                echo "<tr>"
                                . "<td scope='row'>" . $fila['id'] . "</td>";
                                echo "<td>" . $fila['username'] . "</td>";
                                echo "<td>" . $fila['host'] . "</td>";
                                echo "<td>" . $fila['operacion'] . "</td>"
                                . "</tr>";
                            }
                            liberar($resultado);
                            cerrar($link);
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </center>	
</body>
</html>