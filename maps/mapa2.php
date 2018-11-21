<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <title> Mapa Geográfico de la dinamica Infecciosa del Zika</title>

        <!--- LIBRERIAS BOOTSTRAP-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--  FIN DE LIBRERIAS-->


        <style>

        </style>



        <title>Monitoreo Zika</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* Siempre establezca la altura del mapa explícitamente para definir el tamaño de la div
            * Elemento que contiene el mapa. */
            #map {
                height: 95%;
            }
            /* Opcional: hace que la página de muestra llene la ventana. */
            /*  html, body {
                  height: 90%;
                  margin: 0;
                  padding: 0;
              }*/


            /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
            .row.content {height: 1000px;}
            .map{height: 100%}

            /* Set gray background color and 100% height */
            .sidenav {
                background-color: #EEFFEE;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 0px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height: auto;} 
            }



        </style>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-2 sidenav">
                    <h4> <center>Mapa de Foco</center> </h4>
                    <h4> <center>de Infección Zika</center> </h4>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="../view/zika.php" class="btn btn-info" role="button"> Ir a Inicio <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                        <li><a href="../view/zika.php" class="btn btn-info" role="button"> Realizar Diagnóstico</a></li>
                        <li><a href="../maps/mapa2.html" class="btn btn-info" role="button">Actualizar Mapa</a></li>
                        <li><a href="../view/zika.php" class="btn btn-info" role="button">Más información</a></li>
                        <li><a href="../view/zika.php" class="btn btn-info" role="button">Acuerdo de privacidad</a></li>
                        <li><a href="http://www.who.int/es/" class="btn btn-info" role="button" title="Organización Mundial de Salud" >OMS</a></li>
                    </ul><br>

                    <?php
                    if ($_GET) {
                        if ($_GET['ponderacion'] > 50) {
                            echo "<div class='alert alert-danger'>";
                            echo "Tu porcentaje fue " . $_GET['ponderacion'] . ". Se recomienda ralizar un análisis médico para confirmar";
                            echo "</div>";
                        } else {
                            echo "<div class='alert alert-info'>";
                            echo "Tu porcentaje esta debajo de 50";
                            echo "</div>";
                        }
                    }
                    ?>

                    <div class="input-group">
                        <!--<input type="text" class="form-control" placeholder="Busqueda de Datos..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>-->
                    </div>
                    <br><br>
                    <div class="">
                        <h1 align="center" style="background:#fff">  </h1>
                        <h4> Simbología:  % </h4>
                        <ul class="nav nav-pills nav-stacked">
                            <li><div style="border-image: initial;border: 3px solid red; padding: 5px; margin-bottom: 10px;"><img src="icons/rojo.png" width="20" height="20"alt="" />       100</div></li>
                            <li><div style="border-image: initial;border: 3px solid #FF5733; padding: 5px; margin-bottom: 10px;"><img src="icons/anaranjado.png" width="20" height="20"alt="" /> 90-99 </div></li>
                            <li><div style="border-image: initial;border: 3px solid #FFAF33; padding: 5px; margin-bottom:10px;"><img src="icons/amarillo.png" width="20" height="20"alt="" /> 80-89 </div></li>
                            <li><div style="border-image: initial;border: 3px solid green; padding: 5px; margin-bottom:10px;"><img src="icons/verde.png" width="20" height="20"alt="" /> 70-79 </div></li>
                            <li><div style="border-image: initial;border: 3px solid blue; padding: 5px; margin-bottom: 10px;"><img src="icons/azul.png" width="20" height="20"alt="" /> 60-69 </div></li>
                            <li><div style="border-image: initial;border: 3px solid purple; padding: 5px; margin-bottom:10 px;"><img src="icons/morado.png" width="20" height="20"alt="" /> 50-59 </div></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-10" id="map" style="background:#A4CFEE" >
                </div>
                <footer class="container-fluid">
                    <!--<div>Datos basados de aproximadamente 14,000 registros sobre casos confirmados en latinoamerica durante 2016 y 1017.  contactenos para más información. mmoo@itsprogreso.edu.mx</div>
                    <div>Derechos Reservados: MTI. Melquizedec Moo Medina para el Instituto Tecnológico Nacional de México. Actualizado a sep. 23, 2018</div>-->
                </footer>
            </div>
        </div>
        <script>
            var iconBase = 'icons/';
            var icons = {
                amarillo: {
                    icon: iconBase + 'amarillo.png'
                },
                azul: {
                    icon: iconBase + 'azul.png'
                },
                verde: {
                    icon: iconBase + 'verde.png'
                },
                morado: {
                    icon: iconBase + 'morado.png'
                },
                rojo: {
                    icon: iconBase + 'rojo.png'
                },
                anaranjado: {
                    icon: iconBase + 'anaranjado.png'
                },
            };

            //Funcion para Inicializar el mapa en la variable map. Definimos el centro del mapa,zoom para el enfoque y tipo de mapa.
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: new google.maps.LatLng(0.2125, -78.7617),
                    zoom: 4,
                    mapTypeId: 'terrain'
                });
                var infoWindow = new google.maps.InfoWindow;

                // Cambie esto dependiendo del nombre de su archivo PHP o XML

                downloadUrl('obtienemarkers.php', function (data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName('marker');
                    Array.prototype.forEach.call(markers, function (markerElem) {
                        var name = markerElem.getAttribute('name');
                        var address = markerElem.getAttribute('address');
                        var type = markerElem.getAttribute('type');
                        var point = new google.maps.LatLng(
                                parseFloat(markerElem.getAttribute('lat')),
                                parseFloat(markerElem.getAttribute('lng')));

                        //Llenamos la ventana de informacion que se mostrara al hacer click
                        var infowincontent = document.createElement('div');
                        var strong = document.createElement('strong');
                        strong.textContent = name
                        infowincontent.appendChild(strong);
                        infowincontent.appendChild(document.createElement('br'));

                        var text = document.createElement('text');
                        text.textContent = address
                        infowincontent.appendChild(text);
                        //var icon = customLabel[type] || {};
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            icon: icons[type].icon
                                    //label: icon.label
                        });//Agregar el listener para hacer click sobre el marker muestre la info
                        marker.addListener('click', function () {
                            infoWindow.setContent(infowincontent);
                            infoWindow.open(map, marker);
                        });
                    });
                });
            }


            //funcion para bajar el xml y manejarlo segun la url
            function downloadUrl(url, callback) {
                var request = window.ActiveXObject ?
                        new ActiveXObject('Microsoft.XMLHTTP') :
                        new XMLHttpRequest;

                request.onreadystatechange = function () {
                    if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                    }
                };

                request.open('GET', url, true);
                request.send(null);
            }
            function doNothing() {}
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1k9ARMe-B3tUOfxClPl2G8u7OHnJMjus&callback=initMap">
        </script>
    </body>
</html>