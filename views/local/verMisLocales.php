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

    <?php 
        $locales=$this->local;    
    ?>

    <div class="pintper-container verEstilos">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Actualmente contas con estos locales registrados:</h1>
                <hr>
            </div>
        </div>
        <!--Repetir de acá hasta el hr-->
        <?php 
            for($i=0; $i<sizeof($locales);$i++){
        ?>
        <div class="pintper-row">
            <div class="pintper-col-8">
                <h3><?php echo $locales[$i]->Nombre; ?></h3>
                <p><?php echo  $locales[$i]->Direccion; ?></p>
            </div>
            <div class="pintper-col-8">
                <form action="editarLocal" method="post">
					<input type="hidden" name="localId" value="<?php echo  $locales[$i]->LocalId; ?>">
                    <input type="submit" value="Ver Mas" class="pintper-button-op2">
					<button class="pintper-button"><a href="<?php echo constant('URL')?>Estilo/verMisEstilos">Ver Estilos</a></button>
                </form>
            </div>
        </div>
        
        <div class="pintper-row">
            <div class="pintper-col-16">
                <hr>
            </div>
        </div>
        <?php } ?>
        <!-- hasta acá -->
    </div>

</body>
</html>