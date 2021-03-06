<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if (!isset($_SESSION['usuario_registrado'])) {
    header('Location:'.constant("URL").'index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"><link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<?php
		include_once 'header_prop.php'
	?>


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