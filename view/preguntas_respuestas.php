<?php
require_once("../lib/links.php");
libnivel2();
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="../lib/css/select.css">
        <script src="../lib/js/jquery-1.12.3.js" type="text/javascript"></script>
        <script>
            function formReset()
                {
                    document.getElementById("myForm").reset();
                }
            function guardarPregunta() {
                vpregunta = document.getElementById("inputPregunta").value;
                vIdEncuesta = document.getElementById("selectEncuesta").value;
                $.post("../controller/preguntas_respuestas.php", {pregunta: vpregunta, idEncuesta: vIdEncuesta}, function (data) {

                    document.getElementById("inputPregunta").readOnly = true;
                    document.getElementById("botonGuardarPregunta").style.display = 'none';
                    document.getElementById("areaRespuestas").style.display = 'inline';
                    document.getElementById("idPregunta").value = data;
                    document.getElementById("selectEncuesta").value = data;
                    document.getElementById("divEncuesta").style.display = 'none';
                });
            }
            function guardarRespuesta() {
                var vRespuesta = document.getElementById("inputRespuesta").value;
                var vIdPregunta = document.getElementById("idPregunta").value;
                $.post("../controller/guardarRespuesta.php", {idPregunta: vIdPregunta, respuesta: vRespuesta}, function (data) {
                    document.getElementById("idRespuesta").value = data;

                    $("#inputRespuesta").value("");
                    $("#inputRespuesta").focus();
                });
                mostrarTablaRespuestas(vIdPregunta);
                //document.getElementById("divVisualizar").style.display = 'inline';
                //document.getElementById("divAgregarNuevo").style.display = 'inline';
            }
            function mostrarTablaRespuestas(vIdPregunta) {
                $.post("tablaRespuestas.php", {idPregunta: vIdPregunta}, function (data2) {
                    setTimeout(1000);
                    $("#divTablaRespuestas").html(data2);

                });
                
            }
            
        </script>
    </head>
    <body>
        <div id="wrapper">

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
                        <li >
                            <a href="tablaCasos.php"><i class="fa fa-fw fa-bar-chart-o"></i> Casos</a>
                        </li>
                        <li >
                            <a href="inquiry.php"><i class="fa fa-fw fa-table"></i> Encuesta</a>
                        </li>
                        <li class="active">
                            <a href="pregunta.php"><i class="fa fa-fw fa-edit"></i> Preguntas</a>
                        </li>
                        <li>
                            <a href="respuestas.php"><i class="fa fa-fw fa-desktop"></i> Respuestas</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Preguntas <small> Generar </small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-table"></i> Preguntas y Respuestas 
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                   

                    <div class="row">
                      
                                </div>
                            </div>

                            <div class="panel panel-primary">

        <section>
        
            <!--/////////////////AREA DE PREGUNTAS////////////////////////////7-->
            <div class="wrapper" align="center" id="areaPreguntas">
                <?php //imprimirMensaje(); ?>
                <form onsubmit="return false;" id="myForm">
                    <h2 class="form-signin-heading">Alta de Preguntas</h2><br>
                    <input id="inputPregunta" type="text" class="form-group" name="pregunta" placeholder="Pregunta" autofocus/>
                    <!--////////////////// AREA DE COMBOBOX ENCUENTAS///////////////////////////////////////////////////7////-->
                    <div align="center">     
                        <div class="form-group" align="center" id="divEncuesta">
                            <select id="selectEncuesta" name="selectEncuesta" >
                                <option>Seleccione la Encuesta</option>
                                <?php
                                $id = $_REQUEST['idEncuesta'];
                                $tabla = getTabla("encuestas");
                                while ($fila = $tabla->fetch_array(MYSQLI_BOTH)) {
                                    echo "<option value='" . $fila['idEncuesta'] . "'>" . $fila['titulo'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <input id='idEncuesta' name='idEncuesta2' type='hidden' value=''/>
                        <button id="botonGuardarPregunta" onclick="guardarPregunta();" class="btn btn-lg btn-success btn-group-lg" type="submit">Agregar Respuestas</button>
                    </div>
                </form>
            </div>
            <!--////////////////////////////////AREA DE RESPUESTAS//////////////////////////////////////////////////////////////////////////-->
            <div class="wrapper" align="center" id="areaRespuestas" style="display:none;">
                <form onsubmit="return false;">
                    <input id='idPregunta' name='idPregunta2' type='hidden' value=''/>
                    <label>Respuesta </label><br>
                    <input id="inputRespuesta" type="text" class="form-group" name="respuesta" placeholder="Escribe tu Respuesta" autofocus/>
                    <div align="center">
                        <button id="botonGuardarRespuesta" onclick="guardarRespuesta();" class="btn btn-lg btn-success btn-group-lg" type="submit">Agregar Respuesta</button>
                    </div>
                </form>
            </div>
            <!--/////////////////TABLA  DE RESPUESTAS////////////////////////////7-->
            <div id="bgdivTablaRespuestas">
                <div id="divTablaRespuestas"></div></div>
            <br>
            <br>
        </section>    
        <!--////////////////// AREA DE VISUALIZACION DE PREGUNTAS//////////////////////////////////////////////////////////////////-->
        <div class="wrapper" align="center"  id="divVisualizar" style="display:none;">
            <a target="_blank" role="button" class="btn btn-sm btn-success btn-group-sm" href="tablaPreguntas.php">Visualizar Preguntas</a>
        </div>
        <!--////////////////// AREA AGREGAR NUEVA PREGUNTA//////////////////////////////////////////////////////////////////-->
        <div class="wrapper" align="center"  id="divAgregarNuevo" style="display:none;">
            <a target="_blank" role="button" class="btn btn-sm btn-success btn-group-sm" onclick="formReset()" >Agregar Nueva Pregunta</a>
        </div>
       
    </body>
</html>