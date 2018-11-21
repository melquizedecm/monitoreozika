<?php
require_once("../lib/links.php");
require_once("../lib/consultas.php");
require_once("../controller/preguntaModificar.php");
libnivel2();
/* @var $_POST type */
$sql = "SELECT * FROM casos_relacionar";
$tabla = getResultSQL($sql);
?>
<html>
    <head>
        <meta charset="utf-8">
         <link rel="stylesheet" href="../lib/css/bootstrap.css">
        <link rel="stylesheet" href="../lib/css/estilo.css">
      
        <link rel="stylesheet" href="../lib/css/select.css">

        <link rel="stylesheet" href="../lib/styles/estilos_tabla2.css">
        <link rel="stylesheet" href="../lib/css/color-itsp.css">
    </head>

    <body> 
        <section> 
            <div class="wrapper" align="center" id="areaRespuestas" >

                <label>Caso</label>
                <input id='idCaso' name='idCaso' value='100%'/>

            </div>
            <br>
            <center>
                <table  id="tabla" >
                    <thead alimhg="center">
                        <tr>
                            <th>Encuesta</th>
                            <th>Pregunta</th>
                            <th>Respuestas</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $tabla->fetch_array(MYSQLI_BOTH)) {
                            ?>  
                            <tr>
                                <td><?php echo $row['id_caso']; ?></td>
                                <td><?php echo $row['id_pregunta']; ?></td>
                                <td><?php echo $row['id_respuesta']; ?></td>
                                <td><a role="button" class="btn btn-sm btn-success btn-group-sm" href="casosModificar.php?id=<?php echo $row['id_casos']; ?>">Modificar</a></td>
                                <td><a role="button" class="btn btn-sm btn-success btn-group-sm" href="../controller/casosEliminar.php?id=<?php echo $row['id_casos']; ?>">Eliminar</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <br>
                <div align="center" id="guardarCaso" >
                        <button id="guardarCaso"  class="btn btn-lg btn-success btn-group-lg" type="submit">Guardar Caso</button>     
                        <br>
                        <br>
                    </div>
            </center>       
        </section>        
    </body>
</html>
