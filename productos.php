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
		<br><br>
		<section id="contenido">
			<h1>Productos</h1>
			<p>Si usted ha tomado la decisión de crear su propia empresa y necesita el control especifico de cada una de las funciones del personal que laborará con usted en almacén, ventas y caja.</p>

			<p>Si su empresa ya tiene tiempo operando y nunca se ha animado a invertir en un sistema por desconfianza, desconocimiento y falta de presupuesto.</p>
			
			<p>Si usted es una pequeña empresa que tiene problemas en conocer el stock exacto de sus productos, las ventas diarias, y necesitas controlar todas las áreas de la empresa y tener Información exacta y al día.</p>
			
			<p>Si se identificó con alguno de estos casos, le presentamos nuestras soluciones empresariales, elija la que mejor se acomode a sus necesidades:</p>

			<ul>
				<li>Sistema  de Contabilidad</li>
				<li>Sistema de Planillas y Remuneraciones</li>
				<li>Sistema de Facturación y Almacén</li>
				<li>Sistema de Farmacia</li>
				<li>Sistema para Pymes</li>
				<li>Sistema para Punto de venta</li>
				<li>Sistema Integrado</li>
				<li>Sistema de Expedientes Judiciales</li>
				<li>Sistema de Logística</li>
				<li>Sistema de Grifos</li>
				<li>Sistema de Control de Asistencia Personal</li>
				<li>Entre otras</li>
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