<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
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

<?php
	include_once 'header_prop.php';
?>

    <div class="pintper-container propietario">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Bienvenido <?php echo $_SESSION['usuario_registrado']->Nombre;?></h1>
                <p>Para navegar por el sitio hace click en el icono de usuaro</p>
                <hr>
                <h2>Pintper te permite agregar tus cervezas, detallar informacion de tu local para que la gente 
                    llegue a vos de forma efectiva</h2>
                <div class="contenido-container"></div>
            </div>
        </div>
    </div>

    
</body>
</html>