<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="../public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="../public/css/usuarioStyle.css">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
</head>
<body>
    <?php 
        $estilos=$this->estilos; 
        $rows=sizeof($estilos);
    ?>
    <div class="pintper-container modulo-ver-estilos">
        <!--repetir desde pintper-row-->
        <?php 
            for($i=0; $i<$rows;$i++){ 
        ?>
            <div class="pintper-row">                
                <div class="pintper-col-16 container-birras">
                    <img src="<?php echo constant('URL')?>/public/imagenes-usuarios/<?php echo $estilos[$i]->Imagen?>" alt="" width=100 height=100>
                    <h3><?php echo $estilos[$i]->Nombre;?></h3>
                    <p><?php echo $estilos[$i]->Tipo;?></p> <br>
                    <small><?php echo $estilos[$i]->Descripcion;?>.</small>
                </div>
            </div>
        <?php
            }
        ?>    
        
        <br><br><br>
    </div>
</body>
</html>