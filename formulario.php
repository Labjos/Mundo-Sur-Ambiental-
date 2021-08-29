<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
</head>
<title>Formulario de contacto</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estiloformulario.css">
<meta c name="viewport" content="width=device-width, initial-scale=1">

<body>
	<section>
		<div id="titulo">
			<div id="texto_titulo"></div>
		</div>
	</section>

	<section id="formulario">

	<div id="reserva"></div>
	<div id="form">
		<article id="formulario">
			
			<div id="imagen_formulario"></div>
			<div id="texto_formulario"><h3>contactanos VÍA FORMULARIO</h3></div>
			<form method="POST" action="consulta_proyectos.php">
			<input type="text" name="nombre" placeholder="Nombre" required maxlength="30">
			<input type="text" name="apellido" placeholder="Apellido" required maxlength="50">
			<input type="text" name="zona" placeholder="Ubicación Geografica" required maxlength="50">
			<input type="text" name="emprendimiento" placeholder="Título del proyecto" maxlength="80" >
			<input type="email" name="correo" placeholder="Correo Electrónico" required maxlength="100">
			<textarea name="mensaje" placeholder="Breve Descripción del Proyecto" rows="5" required=""></textarea>
			<input type="submit"></form>

			<div id="respuesta"><p>
							
			<?php 
			if  (isset($_GET['e'])) {
				
				 echo "<h5> Mensaje enviado. Gracias!</h5>";
			}
		?></p></div>

		
		</article>
	</div>
</section>

</body>
</html>
