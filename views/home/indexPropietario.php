<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido Nombre</title>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION["usuario_registrado"];?></h1>
    <p>Para navegar por el sitio hace click en el icono de usuaro</p>
    <hr>
    <p>Pintper te permite agregar tus cervezas, detallar informacion de tu local para que la gente llegue a vos de forma efectiva</p>
    <div style="width: 800px; height: 200px; background-color: #5F646D;"></div>

    <!--Links de navegacion temporal -->
    <ul>
        <li><a href="agregarEstilosDuenio.php">Agregar Estilos</a></li>
        <li><a href="verEstilosDuenio.php">Ver mis Estilos</a></li>
        <li><a href="subirPublicidadDuenio.php">Subir Publicidad</a></li>
        <li><a href="<?php echo constant('URL')?>local/agregar">Agregar Local</a></li>
        <li><a href="<?php echo constant('URL')?>local/verMisLocales">Ver mis Locales</a></li>
        <li><a href="configuracionesDuenioLocal.php">Configuracion</a></li>
        <li><a href="<?php echo constant('URL')?>propietario">Salir</a></li>
    </ul>
</body>
</html>