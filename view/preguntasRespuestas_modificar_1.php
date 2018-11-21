<?php
require_once("../lib/links.php");
libnivel2();
require_once '../controller/preguntasRespuestas_modificar.php';
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
 
        
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
        <link rel="stylesheet" href="../lib/css/estilo.css">
  
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
       
        <script>
            $(function () {
                $("#dialog").dialog();
            });
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Isa� Gonz�lez <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
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
                        <li>
                            <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Panel de Control</a>
                        </li>
                        <li>
                            <a href="user.php"><i class="fa fa-fw fa-user"></i> Usuario</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fa fa-fw fa-bar-chart-o"></i> Casos</a>
                        </li>
                        <li>
                            <a href="inquiry.php"><i class="fa fa-fw fa-table"></i> Encuesta</a>
                        </li>
                        <li class="active">
                            <a href="#!"><i class="fa fa-fw fa-edit"></i> Preguntas</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fa fa-fw fa-desktop"></i> Respuestas</a>
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
                                Pregunta <small> Generación</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-table"></i> Pregunta
                                </li>
                            </ol>
                        </div>
                    </div>
        <div id="dialog" >
            <header>
                <nav class="nav navbar-itsp" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand">Monitoreo Zika</a>
                        </div>
                    </div>
                </nav>
            </header>

            <section>
                <div class="wrapper" align="center">
                    <?php
                    if ($_GET) {
                        if ($_GET['id']) {
                            $id = $_GET['id'];
                            $row = obtenerRespuesta($id);
                        }
                    }
                    ?>
                    
                    
                    <form method="post" class="form-group-lg" action="../controller/preguntasRespuestas_modificar2.php?id=<?php echo $row['id_respuesta']; ?>"  >



                        <h2 class="form-signin-heading">Modificar Preguntas Respuestas</h2>

                        <br>



                        <div><span><i></i></span>
     

                            <input type="text" class="form-group" id="inputmodificarRespuesta" name="respuesta" placeholder="Respuesta" autofocus value="<?php echo $row['respuesta']; ?>"/></div>


                        <br>  


                        <br>
                        <br>
                        <div align="center">
                            <button class="btn btn-lg btn-success btn-group-lg" type="submit">Modificar Datos</button>


                        </div>
                        <br>

                    </form>
                    <br>
                    <br>
                    <center>
                    </center>
                </div>
            </section>

        </div>
    </body>
</html>
