<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/usuarioStyle.css">
    <link rel="icon" href="../public/img/Favicon2.png">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Configuracion</title>
</head>
<body>

<?php

include_once 'header_user.php';

?>

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
                        <input type="password" name="Clave" placeholder="Clave Actual" class="pintper-textbox" id="claveActual" required> <br>
                        <input type="password" name="RepetirClave" placeholder="Repetir Clave Actual" class="pintper-textbox" id="claveRepetida" required> <br>
                        <input type="password" name="Nueva Clave" placeholder="Nueva Clave" class="pintper-textbox" id="nuevaClave" required> <br>
                        <span id="mensaje-error"></span> <br>
                        <input type="submit" value="Aceptar" class="pintper-button" onclick="return validarConfig();">
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

    <script src="<?php echo constant("URL")?>public/js/navScript.js"></script>
    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>
    
</body>
</html>
