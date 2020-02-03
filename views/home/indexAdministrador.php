<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido Admin</title>
</head>
<body>
    <h1>index administrador</h1>
    <div>
        <form action="" method="get">
            <h2>Nombre Usuario</h2>
            <p>Tipo usuario</p>
            <input type="submit" value="Eliminar">
            <a href="editarUsuarioDesdeAdmin.php">Editar</a>
            <hr>
        </form>
        <form action="" method="get">
            <h2>Nombre Usuario</h2>
            <p>Tipo usuario</p>
            <input type="submit" value="Eliminar">
            <a href="">Aceptar</a>
            <hr>
        </form>
    </div>
    <div>
        <form action="editarUsuarioDesdeAdmin.php">
            <h2>Buscar Usuario</h2>
            <input type="text" name="NombreUsuario" id="" placeholder="Nombre">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <a href="configuracionesAdmin.php">Configuraciones</a> <br>
    <a href="loginAdmin.php">Salir</a>

</body>
</html>