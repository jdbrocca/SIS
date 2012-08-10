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
			<h1>Dirección</h1>

			<p>Av. José Pardo 15074<br>
			Miraflores - Lima<br>
			<strong>Telef:</strong> 467 0135<br>
			<strong>E-mail:</strong> <a href="mailto:sistemasysoporte2012@gmail.com">sistemasysoporte2012@gmail.com</a></p>
			<p>&nbsp;</p>
			<iframe width="520" height="350" frameborder="0" scrolling="no" marginheight="0" style="border: 1px solid #a2a2a2;" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=431+Av.+Jos%C3%A9+Pardo,+Miraflores,+Lima+Province,+Per%C3%BA&amp;aq=0&amp;oq=Av.+Jose+Pardo+431+&amp;sll=40.396764,-3.713379&amp;sspn=11.139818,23.269043&amp;ie=UTF8&amp;hq=&amp;hnear=Jos%C3%A9+Pardo,+Miraflores,+Provincia+de+Lima,+Per%C3%BA&amp;t=m&amp;ll=-12.109404,-77.030039&amp;spn=0.029372,0.044632&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>

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