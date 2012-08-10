<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SIS - Sistemas y Soporte</title>
	<script type="text/javascript" src="js/modernizr-2.5.3.js"></script>
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/slides.min.jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css" ></style>	
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript">
		$(document).on("ready", function(){
			 $("#slides").slides({
			 	 preload: true,
			 	 preloadImage: 'imagenes/loading.gif',
			 	 generatePagination: true,
			 	 play: 4000,
				 pause: 1500,
				 hoverPause: true,
			 });
		});
	</script>
</head>
<body>
	<div id="todo">			
		<header>
			<?php include("includes/header.shtml"); ?>
		</header>
		<nav>
			<?php include("includes/topmenu.shtml"); ?>
		</nav>
		<section id="slides">
            <div class="slides_container">
                <div>
                    <a href="nuestros-trabajos.php#web"><img src="imagenes/slider1.jpg" width="900" height="250" /></a>
                </div>
                <div>
                    <a href="nuestros-trabajos.php#soporte"><img src="imagenes/slider2.jpg" width="900" height="250" /></a> 
                </div>
                <div>
                    <a href="nuestros-trabajos.php#sistemas"><img src="imagenes/slider3.jpg" width="900" height="250" /></a>
                </div>
            </div>				
		</section>
		<br>
		<section id="contenido">
			<h1>Sistemas y Soporte</h1>

			<p><img src="imagenes/imagen01.jpg" width="250" height="188" class="iimg">Bienvenidos a nuestro website! Sistemas y Soporte es una empresa peruana especializada en el desarrollo e implementación de software y sistemas empresariales. Contamos con una fábrica de software instalada en la ciudad de Lima que nos permite construir, innovar y dar mantenimiento  a los sistemas de su organización de una manera eficiente. Para lograr ese objetivo contamos con un equipo de colaboradores altamente especializados en desarrollo e implementacion de software de última generación, con dominio y conocimiento de los procesos administrativos claves para su empresa, como también el desarrollo y diseño de páginas web, y brindando solución tecnológica.</p>
			
			<p>Conocemos la criticidad que tiene la implantación de nuevos sistemas en su empresa, para lograr este objetivo no solo es necesario contar con un sistema completo, se requiere también un equipo de consultores experimentados, una metodología de implementacion madura y el apoyo de la gerencia de su empresa. Le aseguramos que combinando estos 3 factores el proyecto informático será un éxito rotundo.</p>			
		</section>		
		<aside id="intereses">
			<?php include("includes/rightside.shtml"); ?>
		</aside>		
		<footer>
			<?php include("includes/footer.shtml"); ?>
		</footer>		
	</div>	
</body>
</html>