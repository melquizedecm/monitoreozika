<!DOCTYPE html>
<?php
require_once("../lib/links.php");
require_once("../lib/consultas.php");
require_once("../controller/preguntaModificar.php");
libnivel2();
/* @var $_POST type */
$sql = "SELECT * FROM usuarios";
$tabla = getResultSQL($sql);
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
                        <li>
                            <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Panel de Control</a>
                        </li>
                        <li class="active">
                            <a href="user.php"><i class="fa fa-fw fa-user"></i> Usuario</a>
                        </li>
                        <li>
                            <a href="tablaCasos.php"><i class="fa fa-fw fa-bar-chart-o"></i> Casos</a>
                        </li>
                        <li>
                            <a href="inquiry.php"><i class="fa fa-fw fa-table"></i> Encuesta</a>
                        </li>
                        <li>
                            <a href="tablaPreguntas.php"><i class="fa fa-fw fa-edit"></i> Preguntas</a>
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
                                Usuarios <small> Gestión </small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-table"></i> Usuarios
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row --
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Añadir
                            </button>

                            <!-- Modal -->
                             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Generar Encuesta</h4>
                                        </div>
                                        <form action="../controller/usuarioGenerar.php" method="POST">
                                        <div class="modal-body">
                                           
                                                <div class="form-group">
                                                    <label for="usuarioNombre"> Usuario: </label><br>
                                                    <input id="usuario" type="text" class="form-control"  name="usuario"  autofocus/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="usuarioPassword"> Password </label><br>
                                                    <input class="form-control" id="password" type="text" name="password">

                                                </div>
                                             <div class="form-group">
                                                    <label for="usuarioTipo"> Tipo </label><br>
                                                    <input class="form-control" id="tipo" type="text" name="tipo">

                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                                            <button id="botonGenerarCaso"  class="btn btn-primary" type="submit">Generar Usuario</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-primary">
                                <table class="table table-bordered">
                                   <thead alimhg="center">
                        <tr>
                            <th>ID Usuario</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th colspan="2" aling="center">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       while ($row = $tabla->fetch_array(MYSQLI_BOTH)) {
                            ?>  
                            <tr>
                                <td><?php echo $row['id_user']; ?></td>
                                <td><?php echo $row['name_user']; ?></td>
                                <td><?php echo $row['password_user']; ?></td>
                               
                                <td><a role="button"  class="btn btn-primary" href="userModificar.php?id=<?php echo $row['id_user']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                           <td><a  role="button"  class="btn btn-danger" href="../controller/usuarios_eliminar.php?id=<?php echo $row['id_user']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                            </tr>
                            <?php
                        }
                        ?>
                   </tbody>
                                </table>
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



