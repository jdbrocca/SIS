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
			<h1>¿Quiénes Somos?</h1>

			<p><img src="imagenes/quienes-somos.jpg" width="250" height="188" class="iimg">Somos peruanos dedicados a desarrollar soluciones informáticas de calidad, como: El SBA, sistemas a la medida, desarrollo de portales web y brindar el servicio de soporte de pc’s. Nuestro objetivo es brindar lo mejor a nuestros clientes. Nos hemos comprometido a ser el mejor y más confiable socio tecnológico de quienes acuden por nuestros productos y servicios, para facilitar la toma de sus decisiones comerciales; potencializar sus procesos de negocios; y por consiguiente su crecimiento sostenido.</p>
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