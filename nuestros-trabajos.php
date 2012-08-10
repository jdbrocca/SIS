<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SIS - Sistemas y Soporte</title>
	<?php include("includes/myhead.shtml"); ?>
	<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css">
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
			<h1>Nuestros Trabajos</h1>

			<a name="web"></a>
			<h2>Páginas Web</h2>

			<table width="520" cellspacing="0" cellpadding="0" border="0" id="galweb">
				<tr>
					<td width="33%" align="center"><a href="imagenes/trabajos/web01.jpg" ><img src="imagenes/trabajos/web01-sm.jpg" width="150" border="0"></a></td>
					<td width="34%" align="center"><a href="imagenes/trabajos/web02.jpg" ><img src="imagenes/trabajos/web02-sm.jpg" width="150" border="0"></a></td>
					<td width="33%" align="center"><a href="imagenes/trabajos/web03.jpg" ><img src="imagenes/trabajos/web03-sm.jpg" width="150" border="0"></a></td>
				</tr>
			</table>

			<a name="sistemas"></a>
			<h2>Sistemas Informáticos</h2>

			<table width="520" cellspacing="0" cellpadding="0" border="0" id="galsis">
				<tr>
					<td width="33%" align="center"><a href="imagenes/trabajos/sistema01.jpg" ><img src="imagenes/trabajos/sistema01-sm.jpg" width="150" border="0"></a></td>
					<td width="34%" align="center"><a href="imagenes/trabajos/sistema02.jpg" ><img src="imagenes/trabajos/sistema02-sm.jpg" width="150" border="0"></a></td>
					<td width="33%" align="center"><a href="imagenes/trabajos/sistema03.jpg" ><img src="imagenes/trabajos/sistema03-sm.jpg" width="150" border="0"></a></td>
				</tr>
			</table>

			<a name="soporte"></a>
			<h2>Soporte Técnico</h2>

			<table width="520" cellspacing="0" cellpadding="0" border="0" id="galso">
				<tr>
					<td width="33%" align="center"><a href="imagenes/trabajos/so01.jpg" ><img src="imagenes/trabajos/so01-sm.jpg" width="150" border="0"></a></td>
					<td width="34%" align="center"><a href="imagenes/trabajos/so02.jpg" ><img src="imagenes/trabajos/so02-sm.jpg" width="150" border="0"></a></td>
					<td width="33%" align="center"><a href="imagenes/trabajos/so03.jpg" ><img src="imagenes/trabajos/so03-sm.jpg" width="150" border="0"></a></td>
				</tr>
			</table>			

		</section>
		<aside id="intereses">
			<?php include("includes/rightside.shtml"); ?>
		</aside>	
		<footer>
			<?php include("includes/footer.shtml"); ?>
		</footer>		
	</div>	
	<script type="text/javascript">
	$(function() {
		$('#galweb a').lightBox(); // Selecciona todos los links que estan dentro del ID descrito
		$('#galsis a').lightBox(); 
		$('#galso a').lightBox(); 
	});
	</script>
</body>
</html>