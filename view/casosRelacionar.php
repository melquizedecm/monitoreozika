<?php
require_once("../lib/links.php");
libnivel2();
require_once("../lib/FormulariosElementos.php");
?>

<html lang="es">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ITSP - Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="../lib/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../lib/css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../lib/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="../lib/css2/estilo.css">
        <link rel="stylesheet" href="../lib/css/color-itsp.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="../lib/css/select.css">

        <link rel="stylesheet" href="../lib/css/selectCasos.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script language="javascript" src="../lib/js/jquery-1.2.6.min.js"></script>
        <script language="javascript">
            function getComboRespuesta() {
                var vIdPregunta = document.getElementById("selectPregunta").value;
                $.post("comboRespuesta.php", {idPregunta: vIdPregunta}, function (data) {
                    $("#divSelectRespuesta").html(data);
                });
            }

            function getComboPregunta() {
                var vIdEncuesta = document.getElementById("selectEncuesta").value;
                $.post("comboPregunta.php", {idEncuesta: vIdEncuesta}, function (data) {
                    $("#divSelectPregunta").html(data);
                });
            }

            function guardarSelect() {
                var vSelectEncuesta = document.getElementById("selectEncuesta").value;
                var vSelectPregunta = document.getElementById("selectPregunta").value;
                var vSelectRespuesta = document.getElementById("selectRespuesta").value;

                $.post("../controller/casosRelacionar.php", {selectEncuesta: vSelectEncuesta, selectPregunta: vSelectPregunta, selectRespuesta: vSelectRespuesta}, function (data) {
                    document.getElementById("selectEncuesta").value = data;
                    document.getElementById("selectPregunta").value = data;
                    document.getElementById("selectRespuesta").value = data;




                });
            }
        </script>

    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-itsp" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#!">ITSP - Monitoreo Zika</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Isaí González <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Pérfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Panel de Control</a>
                    </li>
                    <li>
                        <a href="user.php"><i class="fa fa-fw fa-user"></i> Usuario</a>
                    </li>
                    <li class="active">
                        <a href="tablaCasos.php"><i class="fa fa-fw fa-bar-chart-o"></i> Caso</a>
                    </li>
                    <li>
                        <a href="inquiry.php"><i class="fa fa-fw fa-table"></i> Encuesta</a>
                    </li>
                    <li >
                        <a href="pregunta.php"><i class="fa fa-fw fa-edit"></i> Pregunta</a>
                    </li>
                    <li>
                        <a href="respuestas.php"><i class="fa fa-fw fa-desktop"></i> Respuesta</a>
                    </li>
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="dialog" >
            <header>

            </header>

            <section>
                <br>
                <br>
                <br>
                <br>
                <div id="wrapper">

                    <div class="wrapper" align="center">

                        <!--/////////////////AREA DE CASOS///////////////////////////////////-->
                        <div class="wrapper" align="center" id="areaPreguntas">

                            <?php //imprimirMensaje(); ?>
                            <form class="form-signin" onsubmit="return false;" id="formularioRelacionar">
                                <h2 class="form-signin-heading">Relacionar Casos</h2>
                                <input id="inputnombreCasos" type="text"  class="form-control"  name="nombrePregunta" placeholder="Nombre del caso" autofocus/>
                                <br>
                                <br>

                                <!--/////////////////AREA DE RELACION DE ENCUESTAS PREGUNTAS Y RESPUESTAS////////////////////////////-->                    
                                <div  class="form-group" id="divSelectEncuesta" name="divSelectEncuesta" >
                                    <select id="selectEncuesta" onchange="javascript: getComboPregunta();">
                                        <option>Seleccione la Encuesta</option>
                                        <?php
                                        $sql = "SELECT * FROM encuestas";
                                        $tablaEncuesta = getResultSQL($sql);
                                        ?>
                                        <datalist id="listaInventario" >
                                            <option value="--">--</option>
                                            <?php
                                            while ($fila = $tablaEncuesta->fetch_array(MYSQLI_BOTH)) {
                                                echo "<option  value='" . $fila['idEncuesta'] . "'>" . $fila['titulo'] . "</option>";
                                            }
                                            ?>
                                    </select>
                                    </datalist>
                                </div>
                                <div  class="form-group" id="divSelectPregunta" name="divSelectPregunta" >


                                </div>
                                <br>
                                <div class="form-group" id="divSelectRespuesta" name="divSelectRespuesta">
                                    <!--<p>aqui debe asomar el combo</p>-->


                                </div>


                                <!--/////////////////AREA DE AGREGAR RELACIÓN PREGUNTAS Y RESPUESTAS////////////////////////////-->
                                <div align="center">
                                    <button id="botonGuardarRelacion" onclick="guardarSelect();" class="btn btn-lg btn-success btn-group-lg" type="submit">Agregar</button>
                                </div>

                            </form>

                        </div>
                        <br>

                    </div>
                    <br>

                    <br>


                </div>
        </div>
    </section>
</div>

</body>
</html>
