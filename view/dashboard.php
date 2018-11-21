<!DOCTYPE html>
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
                    <li class="active">
                        <a href="#!"><i class="fa fa-fw fa-dashboard"></i> Panel de Control</a>
                    </li>
                    <li>
                        <a href="user.php"><i class="fa fa-fw fa-user"></i> Usuario</a>
                    </li>
                    <li >
                        <a href="tablaCasos.php"><i class="fa fa-fw fa-bar-chart-o"></i> Caso</a>
                    </li>
                    <li>
                        <a href="inquiry.php"><i class="fa fa-fw fa-table"></i> Encuesta</a>
                    </li>
                    <li>
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

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Panel de Control <small>Estadísticas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Panel de Control
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> </div>
                                        <div>Porcentaje de infección en hombres y mujeres</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../highcharts/grafica4.php">
                                
                                
                                <div class="panel-footer">
                                    <span class="pull-left">Ver gráfica</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Cantidad de casos por porcentaje</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../highcharts/grafica5.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver gráfica</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                      
                                        <div>Cantidad de casos en mujeres por rango de edad</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../highcharts/grafica6.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver gráfica</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Cantidad de casos en hombres por rango de edad</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../highcharts/grafica7.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver gráfica</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../lib/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../lib/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../lib/js/plugins/morris/raphael.min.js"></script>
    <script src="../lib/js/plugins/morris/morris.min.js"></script>
    <script src="../lib/js/plugins/morris/morris-data.js"></script>

</body>

</html>













