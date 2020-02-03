<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login Dueño local</title>
</head>
<body>
<h1>Login Dueño local</h1>

	<p>Volver al home haciendo click <a href="index.php">acá</a></p>

	<form action="indexDuenioLocal.php" method="post">

		<label for="correoUsuario">Correo electronico</label>
		<input type="text" name="correoUsuario" id="" placeholder="Correo electronico"> <br>

		<label for="claveUsuario">Clave de usuario</label>
		<input type="password" name="claveUsuario" id="" placeholder="Clave"> <br>

		<a href="#">Olvidé mi contraseña</a> <br>

		<input type="submit" value="Iniciar Sesion">
	</form>

	<p> ¿No tenes cuenta? <a href="registrarDuenioLocal.php">registrate acá</a> </p>	
</body>
</html>