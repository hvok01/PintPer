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
    <title>Bienvenido Admin</title>
</head>
<body>

    <?php 

            include_once 'header_admin.php';

    ?>

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
                <!--editarUsuarioDesdeAdmin.php-->
                <form action="<?php echo constant("URL")?>administrador/editarUsuario" method="POST">
                    <h2>Buscar Usuario</h2> <br>
                    <input type="text" name="NombreUsuario" placeholder="Nombre" class="pintper-textbox" id="nombreUsuarioBusqueda" required>
                    <input type="submit" value="Buscar" class="pintper-button" onclick="return validarBusquedaUsuario();"> <br>
                    <span id="mensaje-error-busqueda"><?php echo $this->mensaje; ?></span><br>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>

</body>
</html>