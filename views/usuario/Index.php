<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/usuarioStyle.css">
	<link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
	<title>Pintper</title>
</head>
<body>

	<!--nav bar-->
	<?php include('header.php'); ?>

	<div class="pintper-container">
		<div class="pintper-row usuario-row">
			<div class="pintper-col-16">
				<h3>Bienvenido!</h3>
				
				<form action="Usuario/login" method="post" onsubmit="return validar()">

					<input type="email" name="correoUsuario" id="correo" placeholder="Correo electronico" class="pintper-textbox" required><br>

					<input type="password" name="claveUsuario" id="clave" placeholder="Clave" class="pintper-textbox" required> <br>

					<span id="mensaje-error"><?php echo $this->mensaje; ?></span><br>

					<input type="submit" value="Iniciar Sesion" class="pintper-button"> <br>
					

					<a href="#">Olvidé mi contraseña</a>
				</form>

				<p> ¿No tenes cuenta? <a href="<?php echo constant("URL"); ?>usuario/registroview">registrate acá</a> </p>
			</div>
		</div>
	</div>	

	<script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>
</body>
</html>