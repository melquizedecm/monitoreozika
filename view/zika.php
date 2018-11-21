<!DOCTYPE html>
<html>
<title>Monitoreo Zika</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="Monitoreo Zika" />
<meta property="og:type" content="website" />
<meta property="og:image" content="../img/logo1.jpg" />
<meta property="og:url" content="http://monitoreozika.com/view/zika.php" />
<meta property="og:description" content="Monitoreo del virus del Zika que es transmitido por mosquitos" />
<!-- W3Schools -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Boootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
  body, html {
      height: 100%;
      color: #777;
      line-height: 1.8;
  }

  /* Create a Parallax Effect */
  .bgimg-1, .bgimg-2, .bgimg-3 {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }

  /* First image (Logo. Full height) */
  .bgimg-1 {
      background-image: url('../img/logo1.jpg');
      min-height: 100%;
      filter: blur(1px);
  }

  /* Second image (Portfolio) */
  .bgimg-2 {
      background-image: url('../img/virus.png');
      min-height: 400px;
      filter: blur(-20px);
  }

  /* Third image (Contact) */
  .bgimg-3 {
      background-image: url("/w3images/parallax3.jpg");
      min-height: 400px;
  }

  .w3-wide {letter-spacing: 10px;}
  .w3-hover-opacity {cursor: pointer;}

  /* Turn off parallax scrolling for tablets and phones */
  @media only screen and (max-device-width: 1024px) {
      .bgimg-1, .bgimg-2, .bgimg-3 {
          background-attachment: scroll;
      }
  }
  .back-to-top 
  {
    position: fixed;
    bottom: 15em;
    right: 1em;
    text-decoration: none;
    color: #000000;
    background-color: rgba(235, 235, 235, 0.80);
    font-size: 12px;
    padding: 1em;
    display: none;
    border-radius: 84px 84px 84px 84px;
    -moz-border-radius: 84px 84px 84px 84px;
    -webkit-border-radius: 84px 84px 84px 84px;
    border: 0px solid #000000;
  }


  .back-to-top:hover {    
      background-color: rgba(135, 135, 135, 0.50);
  }
</style>
<body>
  <!-- boton flotante -->
  <span class="back-to-top w3-center" style="box-shadow: 10px 10px 5px grey;">
    <marquee></marquee><h5>Ayudados con una encuesta sobre el zika</h5></marquee>
    <button onclick="go()" class="btn btn-info"> Ir a la encuesta <i class="fa fa-arrow-right w3-margin-right"></i></button>
  </span>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <center<<span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Monitoreo Zika</span></center<<span>
    </div>
  </div>
  <input type="hidden" name="lat" id="latitude">
  <input type="hidden" name="lon" id="longitude">

  <!-- Container (About Section) -->
  <div class="w3-content w3-container w3-padding-64" id="about" ALIGN="justify">
    <h3 class="w3-center">ACERCA DE</h3>
    <p class="w3-center"><em>Virus Zika</em></p>
    <p>El virus del Zika (ZIKV) es un virus del género Flavivirus, de la familia Flaviviridae, grupo IV del orden sin clasificar que se transmite por la picadura de mosquitos vectores del género Aedes.
    En 2014 el virus se propagó al este a través del océano Pacífico hacia la Polinesia Francesa, y después hacia la isla de Pascua para llegar en 2015 y 2016 a América Central, el Caribe y América del Sur, donde el brote epidémico del Zika ha alcanzado niveles pandémicos</p>
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <p><b><i class="fa fa-photo w3-margin-right"></i>Mosco transmisor del virus</b></p><br>
        <img src="../img/511260-700-470.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
      </div>

      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large" ALIGN="justify">
        <p>El virus del Zika es transmitido por mosquitos con actividad diurna y ha sido aislado a partir de varias especies en el género Aedes, como el A. aegypti, además de mosquitos arborícolas como el A. africanus, A. apicoargenteus, A. furcifer, A. hensilli, A. luteocephalus, y A. vitattus. Los estudios muestran que el periodo de incubación extrínseco en los mosquitos es aproximadamente de 10 días. Los huéspedes vertebrados del virus son principalmente monos y seres humanos.</p>
      </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">Porcentajes de infección:</p>
    <p class="w3-wide"><i class="fa fa-user"></i>Hombres</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-user"></i>Mujeres</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-user"></i>Niños</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
  </div>

  <!-- Second Parallax Image with Portfolio Text -->
  <div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-black w3-wide"></span>
    </div>
  </div>

  <!-- Container (Portfolio Section) -->
  <div class="w3-content w3-container w3-padding-64" id="portfolio" >
    <h3 class="w3-center">Sintomatología</h3>
    <div align="center">
    <p class="w3-center"><em>La enfermedad por el virus del Zika es normalmente leve con síntomas que duran unos días a una semana. Por lo general, las personas que se infectan con zika no se sienten lo suficientemente enfermas como para ir al hospital y es muy raro que mueran por causa de este virus. Por esta razón, muchas personas no se dan cuenta de que están infectadas. Los síntomas del zika son similares a los de otros virus que se propagan a través de las picaduras de mosquitos, como el dengue y chikunguña.</em></p><br></div>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center" align="center">
      <div class="w3-col m3">
          <img src="../img/fiebre.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="No llega a ser muy alta, habitualmente por debajo de 38.5ºC">
      </div>

      <div class="w3-col m3">
        <img src="../img/articular.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Puede acompañarse de dolores articulares con inflamación leve de articulaciones, sobre todo de las manos y los pies.">
      </div>

      <div class="w3-col m3">
        <img src="../img/cabeza.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="También se han dado casos donde se presenta como sintoma el dolor de cabeza">
      </div>
        
    <div class="w3-row-padding w3-center">
         <div class="w3-col m3">
        <img src="../img/muscular.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Adicionalmente, como síntomas generales se describen dolores musculares.">
      </div>
      <div class="w3-col m3">
        <img src="../img/ojos.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Otro síntoma frecuente en los pacientes afectados es el enrojecimiento ocular, o incluso una conjuntivitis de ambos ojos, pero sin presencia de pus.">
      </div>

      <div class="w3-col m3">
          <img src="../img/sarpullido.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Puede aparecer una erupción maculopapular, es decir, manchas rojas que pueden estar levemente sobreelevadas, y que no pican. La erupción suele comenzar en la cara y luego extenderse al resto del cuerpo.B">
      </div>
        </div>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>
  <!-- Footer -->
  <footer class="w3-center w3-green w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Ir Arriba</a>
    </div>
    </footer>

  <!-- Modal -->
    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body text-center">
            <h4>¿Deseas ayudarnos a monitorear el zika con una sencilla encuesta?</h4>   
            <button data-dismiss="modal" class="btn btn-danger">Cerrar</button>
            <button onclick="go()" class="btn btn-info">Ir a Encuesta</button>

          </div>
        </div>
     </div>
  </div>
  <!-- Fin Modal -->
  <!-- Add Google Maps -->
  <script>
    $(document).ready(function()
    {
      $("#mostrarmodal").modal("show");
    });
      
    $.getJSON('https://geoip-db.com/json/geoip.php?jsonp=?').done (function(location) 
    {
      $('#latitude').val(location.latitude);
      $('#longitude').val(location.longitude);              
    });
    function go() 
    {
      var lat = document.getElementById('latitude').value;
      var lon = document.getElementById('longitude').value;
      global="lat="+lat+'&lon='+lon;
      var urlDestino = "../controller/obtenerid_controlador.php?"+global;
      //Esto genera: http://fredyfx.com/index.cshtml?lat=-8.1167518&lon=-79.0371252
      //alert(global);
      window.open(urlDestino, '_self');
    }

    jQuery(document).ready(function() 
    {
      var offset = 220;
      var duration = 500;
      jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > offset) {
              jQuery('.back-to-top').fadeIn(duration);
          } else {
              jQuery('.back-to-top').fadeOut(duration);
          }
      });
        
      jQuery('.back-to-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
      })
    });
    </script>

</body>
</html>
