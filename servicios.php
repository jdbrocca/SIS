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
			<h1>Servicios</h1>
			<p>Le ofrecemos una solución integral que incluye el análisis del problema, el diseño y programación del software, la instalación y finalmente la capacitación y soporte para las personas que se verán beneficiadas con la automatización, como también el desarrollo de páginas web y el servicio de soporte de pc’s e implementación de redes.</p>
			
			<p>Todos estos servicios aseguran a nuestros clientes una adaptación de manera integral de la solución; así como una rápida rentabilidad económica de la inversión:</p>
			
			<p><strong>Preconsultoría:</strong><br>Estudio previo a la implantación, que permite realizar una propuesta personalizada de la solución técnica, su coste y sus plazos de implantación.</p>
			
			<p><strong>Implantación:</strong><br>
			Servicios relacionados con la implantación de la aplicación, desde la instalación y puesta en marcha del software hasta la personalización del sistema a través de una completa parametrización.</p>
			
			<p><strong>Formación:</strong><br>
			Servicios de formación integral del cliente en todas las funcionalidades de la aplicación. Ofrecemos un plan de formación para usuarios de cualquier nivel, adaptado a los requerimientos de tiempo solicitados por parte del cliente.</p>
			
			<p><strong>Mantenimiento:</strong><br>
			Incluye los servicios de soporte (hot-line), el suministro de las nuevas versiones, actualizaciones del software, junto con telemantenimiento.</p>
			
			<p><strong>Servicio post-venta:</strong><br>
			Seguimiento de calidad del servicio en las instalaciones, detección de nuevas necesidades, propuestas y elaboración de nuevos proyectos.</p>
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