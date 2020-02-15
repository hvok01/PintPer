<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/administradorStyle.css">
    <link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Configuraciones</title>
</head>
<body>

    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="<?php echo constant("URL")?>administrador/index"><img src="<?php echo constant("URL")?>public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
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
                        <li class="items-fade"><a href="<?php echo constant('URL')?>administrador/configuraciones">Configuracion</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>administrador">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="pintper-container configuraciones">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Configuracion:</h1>
                <p>Cambiar contraseña</p>
                <hr>
                <form action="">
                    <input type="text" name="ClaveActual" placeholder="Clave Actual" class="pintper-textbox"> <br>
                    <input type="text" name="ClaveNueva" placeholder="Nueva Clave" class="pintper-textbox"> <br>
                    <input type="text" name="ReptirClaveNueva" placeholder="Repetir Nueva Clave" class="pintper-textbox"> <br>
                    <button class="pintper-button">
                        <a href="<?php echo constant("URL")?>administrador/index">Volver</a>
                    </button>
                    <input type="submit" value="Guardar" class="pintper-button-op2">
                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>