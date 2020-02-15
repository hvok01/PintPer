<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/administradorStyle.css">
    <link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Bienvenido Admin</title>
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

    <div class="pintper-container">
        <div class="pintper-row">
            <form action="" method="get">

            <div class="pintper-col-8">
                <h2>Nombre Usuario</h2>
                <p>Tipo usuario</p>
            </div>
            <div class="pintper-col-8">
                <input type="hidden" name="NombreUsuario">
                <input type="hidden" name="TipoUsuario">
                <input type="submit" value="Eliminar"  class="pintper-button">
                <button class="pintper-button-op2">
                    <a href="<?php echo constant("URL")?>administrador/editarUsuario">Editar</a>
                </button>
                
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16">
                <hr>
                </form>
            </div>
        </div>
        <!--Hasta este ultimo div se repite.-->

        <div class="pintper-row">
            <form action="" method="get">

            <div class="pintper-col-8">
                <h2>Nombre Usuario</h2>
                <p>Tipo usuario</p>
            </div>
            <div class="pintper-col-8">
                <input type="hidden" name="NombreUsuario">
                <input type="hidden" name="TipoUsuario">
                <input type="submit" value="Eliminar" class="pintper-button">
                <button class="pintper-button-op2">
                    <a href="<?php echo constant("URL")?>administrador/editarUsuario">Aceptar</a>
                </button>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16">
                <hr>
                </form>
            </div>
        </div>

        <!-- Fragmento para buscar usuarios -->
        <div class="pintper-row">
            <div class="pintper-col-16">
                <form action="editarUsuarioDesdeAdmin.php">
                    <h2>Buscar Usuario</h2> <br>
                    <input type="text" name="NombreUsuario" placeholder="Nombre" class="pintper-textbox">
                    <input type="submit" value="Buscar" class="pintper-button">
                </form>
            </div>
        </div>
    </div>

</body>
</html>