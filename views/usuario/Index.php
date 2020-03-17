<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/usuarioStyle.css">
	<link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
	<title>Pintper</title>
</head>
<body>

	<div class="login-usuario">

		<div class="contenedor-izquierda">
			<h1>PINTPER</h1>
			<p>Para usuarios birreros</p>

			<div class="home-link">
				<a href="<?php echo constant('URL')?>home">
					<svg version="1.1" baseProfile="basic" id="home-link"
						xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
						xml:space="preserve">
					<style type="text/css">
						.st0{fill:#121012;}
					</style>
					<path id="house-home-icon" class="st0" d="M512,273.5L257.6,19l-1.3,1.3l-1.3-1.3L0.4,273.5l25.4,25.4l24.3-24.3v218.8h10.5h25.5
						h94.3h30.7h5.2V305.5H295v187.9h15h21h93.6h35.9v-35.9V272.8l26.1,26.1L512,273.5z M424.5,457.5h-93.6v-152v-35.9H295h-78.6h-35.9
						v35.9v152H86.1V238.6L256.2,68.5l168.3,168.3V457.5z"/>
					</svg>
				</a>
			</div>
		</div>

		<div class="contenedor-derecha">

			<div class="registrar-link">
				<p>No sos miembro?  <a href="<?php echo constant("URL");?>usuario/registroview"> registrate!</a></p>
			</div>

			<div class="form-iniciar-sesion">

				<div class="contenedor-flex">
					<h1>Iniciar Sesion</h1>
					<p><?php echo $this->mensaje; ?> </p>
				
					<form action="<?php echo constant("URL");?>usuario/login" method="post">

						<label for="correoUsuario">Correo</label> <br>
						<input type="email" name="correoUsuario" id="correo" placeholder="Correo electronico" class="pintper-textbox" required> <br>

						<label for="claveUsuario">Correo</label> <br>
						<input type="password" name="claveUsuario" id="clave" placeholder="Clave" class="pintper-textbox" required> <br>

						<a href="#">Olvidé mi contraseña</a> <br>

						<input type="submit" value="Iniciar Sesion" class="pintper-button"> <br>

					</form>

				</div>
			</div>
		</div>

	</div>

	<script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>
</body>
</html>