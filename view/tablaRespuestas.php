<?php
require_once("../lib/links.php");

libnivel2();
/* @var $_POST type */
$idPregunta = $_POST['idPregunta'];
$sql = "SELECT * FROM respuesta WHERE id_pregunta='" . $idPregunta . "'";
$tabla = getResultSQL($sql);
?>



<html>
    <head>

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

        <section> 
            <center>
                <table  id="tabla"class="table table-bordered" >
                    <thead>
                        <tr>
                            <th >ID de Respuesta</th>
                            <th>Respuesta</th>
                            <th>ID pregunta</th>
                            <th>Operacione Modificar</th>
                            <th>Operacione Eliminar</th>

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
                                <td><a role="button"  class="btn btn-primary" href="preguntasRespuestas_modificar.php?id=<?php echo $row['id_respuesta']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <td><a  role="button"  class="btn btn-danger" href="../controller/preguntasRespuestas_eliminar.php?id=<?php echo $row['id_respuesta']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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