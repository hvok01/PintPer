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
        include_once 'header_prop.php';
    ?>    

    <div class="pintper-container verEstilos">
        <div class="pintper-row">
            <div class="pintper-col-16 verEstilos-header">
                <h1>Estas son las cervezas que ofrecés actualmente en <?php echo $this->local->Nombre; ?>.</h1>
                <button class="pintper-button"><a href="<?php echo constant('URL')?>estilo/agregarEstilo/<?php echo $this->local->LocalId; ?>">Nuevo Estilo</a></button>
                <hr>
            </div>
        </div>
        <!--Repetir de acá hasta el hr-->
        <?php 
            $estilo=$this->estilos; 
            $rows=sizeof($estilo);
            for ($i=0; $i < $rows; $i++){

        ?>
        <div class="pintper-row">
            <div class="pintper-col-8">                
                <h3><?php echo $estilo[$i]->Nombre;?></h3>
                <p><?php echo $estilo[$i]->Tipo;?></p>
            </div>
            <div class="pintper-col-8">
                <form action="<?php echo constant('URL')?>estilo/editarEstilos/<?php echo $this->local->LocalId; ?>" method="post">
                    <input type="hidden" name="cerveza_id" value="<?php echo $estilo[$i]->CervezaId;?>">
                    <input type="submit" value="Ver Mas" class="pintper-button-op2">
                </form>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16">
                <hr>
            </div>
        </div>
        <?php } ?>        
    </div>
</body>
</html>