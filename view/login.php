<?php
//Instanciamos el archivo links.php ya que este contiene a los demás archivos que necesitamos en nuestra conexión
require_once '../lib/links.php';
//Llamamos a nuestra función "libnivel+número ya que esta contiene los demás archivos que necesitamos
libnivel2();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesión</title>
        <link rel="stylesheet" type="text/css" href="../lib/css2/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../lib/css2/estilo.css">
        <link rel="stylesheet" type="text/css" href="../lib/css2/color-itsp.css"/>
    </head>
    
    <body>
        <header>
            <nav class="nav navbar-itsp" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand">ITSP - Monitoreo Zika</a>
                    </div>
                </div>
            </nav>
        </header>

        <section>
            <div class="wrapper">
                <form method="POST" class="form-signin" action="../controller/login.php">
                    <img src="http://www.itsprogreso.edu.mx/Descargas/images/logogreen.png" width="100" height="100" class="img-responsive avatar img-rounded" alt="LOGO_ITSP">
                    <h2 class="form-signin-heading">Iniciar Sesión</h2>
                    <div><span><i></i></span>
                        <input type="text" class="form-control" name="user" placeholder="Usuario" autofocus required/></div>
                    <div><span><i></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required/></div>
                        <?php //imprimirMensaje(); ?>
                    <!--<label class="check"><span><a href="login_recuperar_password.php"> Se te olvidó tu contraseña?</a></span></label>-->
                    <button class="btn btn-lg btn-success btn-block" type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </section>
        
        <footer>
            <div id="footer" class="container-fluid text-center">
                <div class="row">
                    <div class="col-xs-12 inner">
                        <ul class="icons">
                            <li><a href="https://twitter.com/tecprogreso" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="https://www.facebook.com/institutotecnologico.superiorprogreso" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="https://www.flickr.com/photos/tecprogresoweb" class="icon alt fa-flickr"><span class="label">Flickr</span></a></li>
                            <li><a href="http://tecprogreso.blogspot.mx/" class="icon alt fa-rss"><span class="label">RSS</span></a></li>
                        </ul>
                        <ul class="copyright">
                            <li>ITSP Monitoreo Zika v1.17</li>
                            <li><a href="http://www.itsprogreso.edu.mx/">Instituto Tecnológico Superior Progreso</a></li>
                            <li>&copy; 2017</li>
                            <li>Act. En Desarrollo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="../lib/js/bootstrap.min.js"></script>
    </body>
</html>
