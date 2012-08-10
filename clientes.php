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
			<h1>Clientes</h1>
			<p>Estamos orgullosos de contar entre nuestros clientes con empresas líderes en el mercado en diferentes rubros. Ellos han usado nuestras soluciones como estrategia para ser más eficientes y competitivos.</p>
			<p>&nbsp;</p>
			<div id="clientes">
				<table width="520" cellspacing="0" cellpadding="0" border="0" align="center" >
					<tr>
						<td align="center"><img src="imagenes/clientes/bcp.jpg" height="65"></td>
						<td align="center"><img src="imagenes/clientes/essalud.jpg" height="65"></td>
						<td align="center"><img src="imagenes/clientes/neptunia.jpg" height="65"></td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td align="center"><img src="imagenes/clientes/lapositiva.jpg" height="65"></td>
						<td align="center"><img src="imagenes/clientes/bridgestone.jpg" height="65"></td>
						<td align="center"><img src="imagenes/clientes/aduandina.jpg" height="65"></td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td align="center"><img src="imagenes/clientes/wiener.jpg" height="65"></td>
						<td align="center"><img src="imagenes/clientes/roche.jpg" height="65"></td>
						<td align="center"><img src="imagenes/clientes/hiper.jpg" height="65"></td>
					</tr>
				</table>
			</div>
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