<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SIS - Sistemas y Soporte</title>
	<?php include("includes/myhead.shtml"); ?>
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
			<?php include("includes/slides.shtml") ?>	
		</section>
		<br>
		<section id="contenido">
			<h1>Nuestra receta de éxito</h1>

			<p>Hacemos nuestro trabajo con la pasión que tenemos por la tecnología informática. Desarrollamos productos exitosos que son la solución que están buscando, prestamos servicios confiables para cumplir objetivos, que responden a las necesidades del mercado de hoy, brindando lo mejor a su empresa y/o negocio, para que de esta manera incremente sus utilidades.</p>
			
			<p><img src="imagenes/nuestro-exito.jpg" width="250" height="166" class="dimg">Contamos con profesionales calificados, organizados en un equipo multidisciplinario. Además, siempre estamos innovando nuestros productos poniéndonos delante de las exigencias tecnológicas propias del mundo contemporáneo.</p>		
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