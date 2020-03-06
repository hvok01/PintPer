<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	<?php 

	include_once 'header_admin.php';

	?>

    <div class="pintper-container configuraciones">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Configuracion:</h1>
                <p>Cambiar contraseña</p>
                <hr>
                <form action="">
                    <input type="password" name="ClaveActual" placeholder="Clave Actual" class="pintper-textbox" id="claveActual" required> <br>
                    <input type="password" name="ClaveNueva" placeholder="Nueva Clave" class="pintper-textbox" id="claveRepetida" required> <br>
                    <input type="password" name="ReptirClaveNueva" placeholder="Repetir Nueva Clave" class="pintper-textbox" id="nuevaClave" required> <br>
                    <span id="mensaje-error"><?php echo $this->mensaje; ?></span><br>
                    <button class="pintper-button">
                        <a href="<?php echo constant("URL")?>administrador/index">Volver</a>
                    </button>
                    <input type="submit" value="Guardar" class="pintper-button-op2" onclick="return validarConfig();">
                </form>
                
            </div>
        </div>
    </div>

    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>
    
</body>
</html>