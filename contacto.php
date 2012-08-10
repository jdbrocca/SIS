<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SIS - Sistemas y Soporte</title>  
    <script type="text/javascript" src="js/validaform.js"></script>
    <script type="text/javascript" src="js/funcionesform.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilosfom.css">  
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

			if(!Modernizr.input.placeholder){
				$('[placeholder]').focus(function() {
			  		var input = $(this);
			  		if (input.val() == input.attr('placeholder')) {
						input.val('');
						input.removeClass('placeholder');
			  		}
				}).blur(function() {
			  		var input = $(this);
			  		if (input.val() == '' || input.val() == input.attr('placeholder')) {
						input.addClass('placeholder');
						input.val(input.attr('placeholder'));
			  		}
				}).blur();
				$('[placeholder]').parents('form').submit(function() {
			  		$(this).find('[placeholder]').each(function() {
						var input = $(this);
						if (input.val() == input.attr('placeholder')) {
				  			input.val('');
						}
			  		})
				});
			}			
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
      		<h1>CONTACTO</h1>
			<p>Mediante este formulario usted podrá contactar directamente con nuestros especialistas  de los servicios que Sistemas y Soporte le ofrece como: Desarrollo de Software, Desarrollo Web, Redes y Comunicaciones, Soporte Técnico de Hardware y Software, Enseñanza personalizada de Software.</p>
			<form class="contacto">
				<p>Nombre:<br><input type="text" class='nombre' value='' placeholder="Ingresar Nombre"></p>
				<p>Email:<br><input type="text" class='email' value='' placeholder="Ingresa Email"></p>
				<p>Asunto:<br><input type="text" class='asunto' value='' placeholder="Ingresar Asunto"></p>
				<p>Ingrese sus Consultas o Inquietudes:<br><textarea rows='6' class='mensaje'  placeholder="Ingresa Consultas"></textarea></p>
 				<p align="right"><input type="submit" value="Enviar Mensaje"></p>
			</form>
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