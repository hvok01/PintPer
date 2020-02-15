<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
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
				<form action="Usuario/login" method="post">
					<span><?php echo $this->mensaje; ?></span><br>
					<!-- <label for="correoUsuario">Correo electronico</label> -->
					<input type="text" name="correoUsuario" placeholder="Correo electronico" class="pintper-textbox"> <br>

					<!-- <label for="claveUsuario">Clave de usuario</label> -->
					<input type="password" name="claveUsuario" id="" placeholder="Clave" class="pintper-textbox"> <br>

					<input type="submit" value="Iniciar Sesion" class="pintper-button"> <br>

					<a href="#">Olvidé mi contraseña</a>
				</form>

				<p> ¿No tenes cuenta? <a href="<?php echo constant("URL"); ?>usuario/registroview">registrate acá</a> </p>
			</div>
		</div>
	</div>	
</body>
</html>