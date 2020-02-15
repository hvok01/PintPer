<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"><link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/propietarioStyle.css">
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
                    <a href="<?php echo constant("URL")?>home/user_prop"><img src="<?php echo constant("URL")?>public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container" >
                    
                </div>
            </div>
            <div class="pintper-col-1" x-data="{ open: false }">

                <img src="<?php echo constant("URL")?>public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true">
                

                <div class="menu-pintper-nav"  x-show="open" @click.away="open = false">
                    <ul>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Estilo/agregarEstilo">Agregar Estilos</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Estilo/verMisEstilos">Ver mis Estilos</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>publicacion">Subir Publicidad</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/agregar">Agregar Local</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/verMisLocales">Ver mis Locales</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>propietario/configuraciones">Configuracion</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>propietario">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="pintper-container verEstilos">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Estas son las cervezas que ofrecés actualmente.</h1>
                <hr>
            </div>
        </div>
        <!--Repetir de acá hasta el hr-->
        <div class="pintper-row">
            <div class="pintper-col-8">
                <h3>Nombre Cerveza</h3>
                <p>Tipo Cerveza</p>
            </div>
            <div class="pintper-col-8">
                <form action="editarEstilos">
                    <input type="hidden" name="nombreCerveza">
                    <input type="hidden" name="tipoCerveza">
                    <input type="submit" value="Ver Mas" class="pintper-button-op2">
                </form>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16">
                <hr>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-8">
                <h3>Nombre Cerveza</h3>
                <p>Tipo Cerveza</p>
            </div>
            <div class="pintper-col-8">
                <form action="editarEstilos">
                    <input type="hidden" name="nombreCerveza">
                    <input type="hidden" name="tipoCerveza">
                    <input type="submit" value="Ver Mas" class="pintper-button-op2">
                </form>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16">
                <hr>
            </div>
        </div>
    </div>
</body>
</html>