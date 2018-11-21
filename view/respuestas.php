<?php
require_once("../lib/links.php");

libnivel2();
/* @var $_POST type */

$sql = "SELECT * FROM respuesta ";
$tabla = getResultSQL($sql);
?>



<html>
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


        <link rel="stylesheet" href="../lib/styles/estilos_tabla2.css">
        <link rel="stylesheet" href="../lib/css/color-itsp.css">

        <!-- <link rel="stylesheet" href="../lib/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../lib/js/jquery.dataTables.min.js">
        
  
         <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
         
         <link href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
         <script>
             <script type="text/javascript">//javascript para crear tablas dinamicas con el funcionamiento de campo de busqueda
             $(document).ready(function() {
                 $('#tabla').DataTable();
             } );
             </script>-->
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
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
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
                            <a href="tablaCasos.php"><i class="fa fa-fw fa-bar-chart-o"></i> Casos</a>
                        </li>
                        <li>
                            <a href="inquiry.php"><i class="fa fa-fw fa-table"></i> Encuesta</a>
                        </li>
                        <li>
                            <a href="pregunta.php"><i class="fa fa-fw fa-edit"></i> Preguntas</a>
                        </li>
                        <li class="active">
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
                               Respuestas <small> Gestión </small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-table"></i> Respuestas
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                  
                   
                            <div class="panel panel-primary">
        <section> 
            <center>
                <table  id="tabla"class="table table-bordered" >
                    <thead>
                        <tr>
                            <th >ID de Respuesta</th>
                            <th>Respuesta</th>
                            <th>ID pregunta</th>
                            <th>Operacion Modificar</th>
                            <th>Operacion Eliminar</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($row = $tabla->fetch_array(MYSQLI_BOTH)) {
                            ?>  
                            <tr>
                                <td><?php echo $row['id_respuesta']; ?></td>
                                <td><?php echo $row['respuesta']; ?></td>
                                <td><?php echo $row['id_pregunta']; ?></td>
                                 <td align="center"><a role="button"  class="btn btn-primary" href="preguntasRespuestas_modificar.php?id=<?php echo $row['id_respuesta']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <td align="center"><a  role="button"  class="btn btn-danger" href="../controller/preguntasRespuestas_eliminar.php?id=<?php echo $row['id_respuesta']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </tr>

                            <?php
                        }
                        ?>



                    </tbody>

                </table>
            </center>

        </section>



    </body>
</html>