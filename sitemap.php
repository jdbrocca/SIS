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
			<h1>Sitemap</h1>
			
			<ul>
				<li><a href="/">INICIO</a></li>
				<li><a href="javascript:void(0);">NOSOTROS</a>
					<ul>
						<li><a href="quienes-somos.php">¿Quienes Somos?</a></li>
						<li><a href="nuestro-exito.php">Nuestro Éxito</a></li>
						<li><a href="mision.php">Misión</a></li>
						<li><a href="vision.php">Visión</a></li>
						<li><a href="valores.php">Valores</a></li>
					</ul>
				</li>
				<li><a href="servicios.php">SERVICIOS</a></li>
				<li><a href="productos.php">PRODUCTOS</a>
					<ul>
						<li><a href="nuestros-trabajos.php">Nuestros Trabajos</a></li>
					</ul>
				</li>
				<li><a href="clientes.php">CLIENTES</a></li>
				<li><a href="contacto.php">CONTACTO</a>
					<ul>
						<li><a href="direccion.php">Dirección</a></li>
					</ul>
				</li>
</ul>

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