<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="icon" href="../public/img/Favicon2.png">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="../public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="../public/css/usuarioStyle.css">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Bienvenido a Pintper</title>
</head>
<body>

    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="#"><img src="../public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container" >
                    <!-- Formulario para enviar la busqueda -->
                    <form action="<?php echo constant('URL')?>local/buscarLocales" method="POST" class="form-busqueda">
                        <input type="text" name="busqueda" placeholder="Buscar local" class="pintper-txt-busqueda" id="txt-busqueda">
                        <input type="submit" value="" class="pintper-btn-buscar" onclick="return validarBusqueda();">
                    </form>
                </div>
            </div>
            <div class="pintper-col-1" x-data="{ open: false }">

                <img src="../public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true" style="top: 6px;">
                

                <div class="menu-pintper-nav"  x-show="open" @click.away="open = false">
                    <ul>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/verLocales">Ver Locales</a></li>
                        <li class="items-fade"><a href="#Promociones">Promociones</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>usuario/config">Configuraciones</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Usuario">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
<?php
    $pub=$this->publicidad;
    $row=sizeof($pub);
?>
    <!-- <h1>Inicio de Usuario Comun.</h1> -->
    <!-- Acá dejo un div para poner el modulo de publicidad. -->
    <!-- Acá se encuenta la barra de navegacion de estilos de cerveza -->
    <div class="nav-estilos" x-data="{ open: false }">

        <div class="EspacioPublicidad" id="publicidad">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <?php
                    for($i=0; $i<$row; $i++) {
                    if($i==0){ ?>
                    <div class="carousel-item active">
                        <img class="d-block img-carousel" src="../public/imagenes-usuarios/publicidad/<?php echo $pub[$i]->Imagen?>" alt="First slide">
                        <div class="carousel-caption">
                        <?php
                        echo '<h4>'.$pub[$i]->Titulo.'</h4>';
                        echo '<h5>'.$pub[$i]->Texto.'</h5>';
                        ?>
                        </div><!--Caption-->
                    </div>
                    <?php }else{ ?>
                    <div class="carousel-item">
                        <img class="d-block img-carousel" src="../public/imagenes-usuarios/publicidad/<?php echo $pub[$i]->Imagen?>" alt="Second slide">
                        <div class="carousel-caption">
                        <?php
                        echo '<h3>'.$pub[$i]->Titulo.'</h3>';
                        echo '<h5>'.$pub[$i]->Texto.'</h5>';
                        ?>
                        </div><!--Caption-->
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

        <img src="../public/img/menu.png" alt="menu" class="pintper-menu-icon" id="menu-pintper" @click="open = true">

        <img src="../public/img/delete.png" alt="menu" class="pintper-menu-estilos nav-estilos-fade-delay hidden" id="salir-pintper" @click="open = false">

        <div id="navBar" class="navBar nav-estilos-fade" x-show="open">

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
    <script src="../public/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    
    <script>
       $('.carousel').carousel();
    </script> 
        
    <script src="<?php echo constant("URL")?>public/js/navScript.js"></script>
</body>
</html>