<!DOCTYPE html>
<html lang="es">
<head>
<title>LANDPAG | Desarrollo web profesional</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<meta name="google-site-verification" content="6IlxN7EvPDjfY_9KDHXeb2Gaz5nTXuAx3NVpmOWdJ18" />
<meta name="description"
  content="Tener un sitio web nunca había sido tan fácil y LANDPAG es tu mejor opción para obtener diseños adaptables, escalables y amigables.">
<meta name="keywords"
  content="landpag,land pag,LANDPAG,LAND PAG,landing page,diseño web,desarrollo web,diseño web colombia,crear pagina,agencia desarrollo">
<meta name="robots" content="Index, Follow">
<meta name="google" content="nositelinkssearchbox">
<meta name="author" content="LANDPAG">

<link href="{{asset("assets/css/custom.css")}}" rel="stylesheet" type="text/css">
<link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
<link href="{{asset("assets/css/responsiveslides.css")}}" rel="stylesheet" type="text/css">
<link href="{{asset("assets/css/animate.css")}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="{{asset('assets/img/logo.png')}}" />
<script type="text/javascript" src="{{asset("assets/js/jquery.min.js")}}"></script>
<script	src="{{asset("assets/js/jquery.smint.js")}}" type="text/javascript" ></script>
<script	src="{{asset("assets/js/custom.js")}}" type="text/javascript" ></script>
<script	src="{{asset("assets/js/responsiveslides.min.js")}}" type="text/javascript" ></script>
<script type="text/javascript">
	
$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
	});
	$(".rslides").responsiveSlides({
	
    speed: 800
});
$(".subir").click(function(){
      $("html, body").animate({scrollTop:"0px"},2000);
});
var change= false;
$(window).scroll(function(){
    window_y = $(window).scrollTop(); 
    nosotros = parseInt($("#nosotros").height()); 
    if (window_y > nosotros) { 
		$('.subir').show(); 
    } else{
		$('.subir').hide();
	}
});


});


</script>

<script src=https://kit.fontawesome.com/a6439df166.js></script>

<script type="text/javascript" src="{{asset("assets/js/wow.js")}}"></script>

<script>
	new WOW().init();
	</script>
</head>
<body>
<div class="wrap">
	

	<div class="subMenu" >
	 	<div class="inner">
		<div class="contlogo">
			<div class="logo"></div> 
			<div class="text-logo">
			<h6>LAND<span class="color-blue">PAG</span></h6>
			</div>
		</div>
			<div id="site-nav" class="site-nav">	 		
	 			<a href="#inicio" class="subNavBtn">Inicio</a> 
				<a href="#nosotros" class="subNavBtn">Nosotros</a>
				<a href="#servicios" class="subNavBtn">Servicios</a>
				<a href="#contacto" class="subNavBtn">Contacto</a>
			</div>
			<div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
					<div class="menu-movil"></div>
			</div>			
		</div>
	</div>
	@include("inicio")

	@include("nosotros")

	<div class="divicion">
		<div class="wow animated slideInLeft slower"></div>
	</div>

	@include("servicios")

	<div class="divicion">
		<div class="wow animated slideInLeft slower"></div>
	</div>

	@include("contacto")


	<div class="footer">
		<div class="row">	
			<div class="col-md-12 fpt-5">© Copyright 2019 landpag.com | Todos los derechos reservados | Desarrollo web profesional</div>
		</div>
	</div>
	<a class="solicitarflotante" target="_blank" href="https://web.whatsapp.com/send?phone=573197835853&text=¡Hola! ¿Deseo mayor información sobre el desarrollo de una página web?"><i class="fab fa-whatsapp"></i> Solicitar
	</a>
	<a class="subir"><i class="fas fa-arrow-up"></i></a>
</div>
@if(!empty($data) or $errors->any())
	<script>
			$('html, body').animate({scrollTop: $('.contacto').position().top },2000);
	</script>
@endif

</body>
</html>