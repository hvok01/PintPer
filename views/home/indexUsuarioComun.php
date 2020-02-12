<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="../public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="../public/css/usuarioStyle.css">
    <link rel="icon" href="../public/img/Favicon2.png">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Bienvenido a Pintper</title>
</head>
<body>

    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="#"><img src="../public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container" >
                    <!-- Formulario para enviar la busqueda -->
                    <form action="" method="get" class="form-busqueda">
                        <input type="text" name="" placeholder="Buscar local" class="pintper-txt-busqueda">
                        <input type="submit" value="" class="pintper-btn-buscar">
                    </form>
                </div>
            </div>
            <div class="pintper-col-1" x-data="{ open: false }">

                <img src="../public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true">
                

                <div class="menu-pintper-nav"  x-show="open" @click.away="open = false">
                    <ul>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/verLocales">Ver Locales</a></li>
                        <li class="items-fade"><a href="#Promociones">Promociones</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>usuario/config">Configuraciones</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Usuario">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- <h1>Inicio de Usuario Comun.</h1> -->
    <!-- Acá dejo un div para poner el modulo de publicidad. -->
    <!-- Acá se encuenta la barra de navegacion de estilos de cerveza -->
    <div class="nav-estilos" x-data="{ open: false }">
        <div id="EspacioPublicidad">
        </div>

        <img src="../public/img/menu.png" alt="menu" class="pintper-menu-icon" id="menu-pintper" @click="open = true">

        <img src="../public/img/delete.png" alt="menu" class="pintper-menu-estilos nav-estilos-fade-delay hidden" id="salir-pintper" @click="open = false">

        <div id="navBar" class="navBar nav-estilos-fade" x-show="open">

            <ul>
                <li>Estilos</li>
                <li><a href="#Lager">Lager</a></li>
                <li><a href="#Stout">Stout</a></li>
                <li><a href="#Porter">Porter</a></li>
                <li><a href="#IPA">IPA</a></li>
            </ul>
        </div>
    </div>
    
    <script src="../public/js/navScript.js"></script>
</body>
</html>