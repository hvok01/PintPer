<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar usuario Comun</title>
</head>
<body>
<h1>Registro usuario comun</h1>

<p>Podes registrarte para encontrar puntos de recarga <br> completando el siguiente formulario:</p>

<form action="index.php" method="post">
    <label for="nombreUsuario">Nombre de usuario</label>
    <input type="text" name="nombreUsuario" id="" placeholder="Nombre de usuario"> <br>

    <label for="correoUsuario">Correo electronico</label>
    <input type="text" name="correoUsuario" id="" placeholder="Correo electronico"> <br>

    <label for="claveUsuario">Clave de usuario</label>
    <input type="password" name="claveUsuario" id="" placeholder="Clave"> <br>

    <label for="repetirClaveUsuario">Repetir Clave</label>
    <input type="password" name="repetirClaveUsuario" id=""  placeholder="Repetir clave"> <br>

    <input type="submit" value="Registrarme">
</form>

<p> ¿Ya tenes cuenta? <a href="#">Inicía sesion</a> </p>
</body>
</html>