<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Login usuario comun</h1>
	<form action="Usuario/login" method="post">
		<span><?php echo $this->mensaje; ?></span><br>
		<label for="correoUsuario">Correo electronico</label>
		<input type="text" name="correoUsuario" id="" placeholder="Correo electronico"> <br>

		<label for="claveUsuario">Clave de usuario</label>
		<input type="password" name="claveUsuario" id="" placeholder="Clave"> <br>

		<a href="#">Olvidé mi contraseña</a> <br>

		<input type="submit" value="Iniciar Sesion">
	</form>

	<p> ¿No tenes cuenta? <a href="<?php echo constant("URL"); ?>Usuario/registroview">registrate acá</a> </p>	
</body>
</html>