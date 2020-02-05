<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login admin</title>
</head>
<body>
<h1>Login admin</h1>

	<p>Volver al home haciendo click <a href="index.php">acá</a></p>

	<form action="indexAdministrador.php" method="post">

		<label for="correoUsuario">Correo electronico</label>
		<input type="text" name="correoUsuario" id="" placeholder="Correo electronico"> <br>

		<label for="claveUsuario">Clave de usuario</label>
		<input type="password" name="claveUsuario" id="" placeholder="Clave"> <br>

		<a href="#">Olvidé mi contraseña</a> <br>

		<input type="submit" value="Iniciar Sesion">
	</form>	
</body>
</html>