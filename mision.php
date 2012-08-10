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
			<h1>Misión</h1>

			<p>Brindar un excelente servicio a todos nuestros clientes, satisfaciendo sus necesidades. El éxito de nuestra empresa radica en:</p>
			
			<ul>
				<li>Personal competente, responsable y apasionado por darle al cliente la satisfacción necesaria.</li>
				<li>Búsqueda constante de la excelencia en todos los pasos que damos.</li>
				<li>Continúa modernización e innovación en nuestros procesos, internos y de atención al cliente.</li>
				<li>Permanecemos en constante investigación en tecnología de software.</li>
			</ul>	

			<p align="center"><img src="imagenes/mision.jpg" width="250" height="202" ></p>
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