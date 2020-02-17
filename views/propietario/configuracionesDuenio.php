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

    <div class="pintper-container configuraciones">

        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Configuraciones</h1>
                <hr>
            </div>
        </div>

        <form action="" onsubmit="return validarConfigDuenio();">

        <div class="pintper-row">
            <div class="pintper-col-8">
                <input type="text" name="Nombre" placeholder="Nombre" class="pintper-textbox" id="nombre" required autofocus>
                <input type="text" name="Apellido" placeholder="Apellido" class="pintper-textbox" id="apellido" required >
            </div>
            <div class="pintper-col-8">
                <input type="number" name="Documento" placeholder="Documento" class="pintper-textbox" id="documento" required >
                <input type="email" name="Correo" placeholder="Correo" class="pintper-textbox" id="correo" required >
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Cambiar Clave</h1>
                <hr>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-8">
                <input type="password" name="ClaveActual" placeholder="Clave Actual" class="pintper-textbox" id="claveActual" required >
                <input type="password" name="NuevaClave" placeholder="Nueva Clave" class="pintper-textbox" id="nuevaClave" required >
            </div>
            <div class="pintper-col-8">
                <input type="password" name="RepetirNuevaClave" placeholder="Repetir Nueva Clave" class="pintper-textbox" id="repetirNuevaClave" required >
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16">
                <span id="mensaje-error"></span> <br>
                <button class="pintper-button-marron-claro"><a href="<?php echo constant('URL')?>Home/user_prop">Volver</a></button>
                    <input type="submit" value="Guardar" class="pintper-button">
                </form>
            </div>
        </div>

    </div>

    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>

</body>
</html>