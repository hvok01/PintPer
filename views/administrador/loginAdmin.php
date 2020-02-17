<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/usuarioStyle.css">
	<link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
	<title>Login admin</title>
</head>
<body>

	<?php include('header.php'); ?> 

	<div class="pintper-container">
			<div class="pintper-row usuario-row">
				<div class="pintper-col-16">
					<h3>Login admin</h3>

					<form action="<?php echo constant('URL')?>administrador/login" method="post" onsubmit="return validar()">

						<span id="mensaje-error"><?php echo $this->mensaje; ?></span><br>
					
						<input type="email" name="correoUsuario" placeholder="Correo electronico" class="pintper-textbox" id="correo" required> <br>

						<input type="password" name="claveUsuario" placeholder="Clave" class="pintper-textbox" id="clave" required> <br>

						<a href="#">Olvidé mi contraseña</a> <br>

						<input type="submit" value="Iniciar Sesion" class="pintper-button">
					</form>	
				</div>
			</div>
	</div>
	

	<script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>

</body>
</html>