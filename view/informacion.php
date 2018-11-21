<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sistema de encuestas</title>
        <link href="../lib/css2/encuestas.css" rel="stylesheet" type="text/css"/>
        <link href="../lib/css2/letras.css" rel="stylesheet" type="text/css"/>
        <script>
function comenzar(){
    navigator.geolocation.getCurrentPosition(fn_ok, fn_error);
}


function fn_error(){
alert('Error');
}

function fn_ok(respuesta){

var lat = respuesta.coords.latitude;
var lon = respuesta.coords.longitude;

global="lat="+lat+'&lon='+lon;
var urlDestino = "http://localhost/monitoreozika/controller/obtenerid_controlador.php?"+global;
//Esto genera: http://fredyfx.com/index.cshtml?lat=-8.1167518&lon=-79.0371252
//alert(global);
window.open(urlDestino, '_self');
}
</script>
 
</head>
<body>
    <div class="wrap">
        
        <ul class="votacion index">
            <h1>Información</h1>
            <h2>Datos y cifras</h2><br>
            <p>Esta enfermedad es causada por un virus transmitido principalmente por mosquitos del género Aedes.</p><br>
            <p>Los pacientes con enfermedad por el virus de Zika pueden presentar síntomas tales como: fiebre no muy elevada, exantema, conjuntivitis, dolores musculares y articulares, malestar o cefaleas, que suelen durar entre 2 y 7 días.</p><br>
            <p>Hay un consenso científico sobre la relación causal entre el virus de Zika y la microcefalia y el síndrome de Guillain-Barré. También se están investigando las relaciones con otras complicaciones neurológicas.</p><br>
            <h2>Signos y síntomas</h2><br>
            <p>El periodo de incubación (tiempo transcurrido entre la exposición y la aparición de los síntomas) de la enfermedad por el virus de Zika no está claro, pero probablemente sea de pocos días. Los síntomas son similares a los de otras infecciones por arbovirus, entre ellas el dengue, y consisten en fiebre, erupciones cutáneas, conjuntivitis, dolores musculares y articulares, malestar y cefaleas; suelen ser leves y durar entre 2 y 7 días.</p>
        </ul>
        <div align="right">
            <!-- <input style="cursor: pointer" type="submit" name="btnComenzar" value="Comenzar Encuesta">-->
            <button  type="submit"    id="btnGet" onclick="comenzar()" name="btnComenzar" style="cursor: pointer">Comenzar Encuesta</button>       
        </div>
        </div>
    <div id="out"></div>
       
</body>
</html>
