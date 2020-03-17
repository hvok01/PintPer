<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if (!isset($_SESSION['usuario_registrado'])) {
    header('Location:'.constant("URL").'index.php');
}
?>
?>
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
    <title>Locales</title>
</head>
<body>
<?php	
   include_once 'header_user.php';
?>
    <div class="pintper-container contenedorVerLocales">
        <?php 
            $locales=$this->local;
            for($i=0;$i<sizeof($locales);$i++){ ?>
        <form action="<?php echo constant('URL')?>local/verCompleto/<?php echo $locales[$i]->LocalId;?>" method="post">
            <div class="pintper-row">
                <div class="pintper-col-8">
                    <h2><?php echo $locales[$i]->Nombre;?></h2>
                    <h3><?php echo $locales[$i]->Direccion;?></h3>
                </div>
                
                <div class="pintper-col-8">
                    <p>Horario de atencion</p>
                    <p><?php echo $locales[$i]->HorarioAtencion;?></p>
                    <button type="submit" class="pintper-button">Ver Mas</button>
                </div>
            </div><hr>
        </form>
    <?php } ?>

    </div>   

    <script src="<?php echo constant("URL")?>public/js/navScript.js"></script>
    
    </body>
</html>