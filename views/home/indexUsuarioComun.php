<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a Pintper</title>
</head>
<body>

    <h1>Inicio de Usuario Comun.</h1>
 <!-- Acá dejo un div para poner el modulo de publicidad. -->
    <div id="EspacioPublicidad">

    </div>
    <!-- Acá se encuenta la barra de navegacion temporalmente -->
    <div id="navBar">
        Navegar Por aca
        <ul>
            <li><a href="<?php echo constant('URL')?>local">Ver Locales</a></li>
            <li><a href="#Promociones">Promociones</a></li>
            <li><a href="<?php echo constant('URL')?>usuario/config">Configuraciones</a></li>
            <li><a href="<?php echo constant('URL')?>Usuario">Cerrar Sesion</a></li>
        </ul>
    </div>
    <!-- Acá se encuenta la barra de navegacion de estilos de cerveza -->
    <div id="navBar">
        <ul>
            <li><a href="#Lager">Lager</a></li>
            <li><a href="#Stout">Stout</a></li>
            <li><a href="#Porter">Porter</a></li>
            <li><a href="#IPA">IPA</a></li>
        </ul>
    </div>
</body>
</html>