<!DOCTYPE html>
<html lang="es">
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
    <title>Editar Usuario</title>
</head>
<body>

	<?php 

	include_once 'header_admin.php';

	?>

    <div class="pintper-container editarUsuario">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Editar Usuario</h1>
                <p>Para ver datos personales y dar de baja</p>
                <hr>

                <form action="">
                    <h3>Nombre Usuario</h3>
                    <h3>Correo Usuario</h3>
                    <h3>Estado Usuario</h3>
                    <input type="hidden" name="NombreUsuario">
                    <input type="hidden" name="CorreoUsuario">
                    <input type="hidden" name="EstadoUsuario">
                    <input type="submit" value="Dar de baja" class="pintper-button-op2">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>