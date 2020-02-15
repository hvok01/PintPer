<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="../public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="../public/css/usuarioStyle.css">
    <link rel="icon" href="../public/img/Favicon2.png">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Configuracion</title>
</head>
<body>

    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="<?php echo constant('URL')?>home/user_comun"><img src="../public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container">
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

    <div class="pintper-container config-container">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Configuraciones</h1>
                <hr>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-8">
                    <form action="" method="post">
                        <h1>Cambiar contraseña</h1>
                        <p>Podés cambiar la contraseña completando el formulario de abajo.</p>
                        <input type="text" name="" placeholder="Clave Actual" class="pintper-textbox"> <br>
                        <input type="text" name="" placeholder="Repetir Clave Actual" class="pintper-textbox"> <br>
                        <input type="text" name="" placeholder="Nueva Clave" class="pintper-textbox"> <br>
                        <input type="submit" value="Aceptar" class="pintper-button">
                    </form>
                    <a href="<?php echo constant('URL')?>home/user_comun" class="pintper-button-op2">Volver</a>
                    <br>
            </div>

            <div class="pintper-col-8">
                    <form action="" method="post">
                        <h1>Darme de baja</h1>
                        <p>Si ya no querés formar parte de Pintper podes darte de baja</p>
                        <input type="submit" value="Darme de baja" class="pintper-button">
                    </form>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16 link-contacto-pintper">
                <p>Si querés ponerte en contacto con pintper para dejar sugerencias hace 
                    <a href="<?php echo constant('URL')?>Home/contacto">click acá </a>
                </p>
            </div>
        </div>
                
    </div>

</body>
</html>
