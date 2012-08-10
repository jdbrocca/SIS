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
			<h1>Valores</h1>

			<ul>
				<li>Total satisfacción para nuestros clientes.</li>
				<li>Compromiso de calidad, eficiencia y efectividad en nuestros servicios.</li>
				<li>Pasión por la tecnología informática.</li>
				<li>Integridad y responsabilidad.</li>
				<li>Valoramos el talento e iniciativa de nuestros colaboradores.</li>
				<li>Promovemos el liderazgo y el trabajo en equipo.</li>
				<li>Respeto y compromiso con nuestro entorno social y el medio ambiente.</li>
			</ul>
			<br>
			<p align="center"><img src="imagenes/valores.jpg" widht="300"></p>
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