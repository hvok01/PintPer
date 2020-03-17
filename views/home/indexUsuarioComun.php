<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/bootstrap.min.css">
    <link rel="icon" href="../public/img/Favicon2.png">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/usuarioStyle.css">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Bienvenido a Pintper</title>
</head>
<body style="overflow-x: hidden;">
<?php

include_once 'header_user.php';


    $pub=$this->publicidad;
    $row=sizeof($pub);
?>

    <div class="nav-estilos slider" x-data="{ open: false }">

        <div class="EspacioPublicidad" id="publicidad">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <?php
                    for($i=0; $i<$row; $i++) {
                    if($i==0){ ?>
                    <div class="carousel-item active">
                        
                        <img class="d-block img-carousel" src="<?php echo constant('URL')?>public/imagenes-usuarios/publicidad/<?php echo $pub[$i]->Imagen?>" alt="First slide">
                        <!--Caption-->
                        <div class="carousel-caption">
                            <h4><?php echo $pub[$i]->Titulo?></h4>
                            <h3><?php echo $pub[$i]->Texto?></h3>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <h4><?php echo $pub[$i]->Titulo?></h4>
                            <h3><?php echo $pub[$i]->Texto?></h3>
                        </div>
                        <img class="d-block img-carousel" src="<?php echo constant('URL')?>public/imagenes-usuarios/publicidad/<?php echo $pub[$i]->Imagen?>" alt="First slide">
                        
                    </div>
                <?php }
                } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                
        </div>


        <img src="<?php echo constant('URL')?>public/img/menu.png" alt="menu" class="pintper-menu-icon" id="menu-pintper" @click="open = true">

        <img src="<?php echo constant('URL')?>public/img/delete.png" alt="menu" class="pintper-menu-estilos hidden" id="salir-pintper" @click="open = false">

        <div id="navBar" class="navBar" x-show="open">

            <ul>
                <li>Estilos</li>
                <li><a href="#Lager">Lager</a></li>
                <li><a href="#Stout">Stout</a></li>
                <li><a href="#Porter">Porter</a></li>
                <li><a href="#IPA">IPA</a></li>
            </ul>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo constant('URL')?>public/js/bootstrap.min.js"></script>
    
    <script>
       $('.carousel').carousel();
    </script> 
        
    <script src="<?php echo constant("URL")?>public/js/navScript.js"></script>
</body>
</html>