<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="../public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="../public/css/usuarioStyle.css">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Contacto: Pintper</title>
</head>
<body>

    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="<?php echo constant('URL')?>home/user_comun"><img src="../public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container">
                    <!-- Formulario para enviar la busqueda -->
                    <form action="" method="get" class="form-busqueda">
                        <input type="text" name="" placeholder="Buscar local" class="pintper-txt-busqueda">
                        <input type="submit" value="" class="pintper-btn-buscar">
                    </form>
                </div>
            </div>
            <div class="pintper-col-1" x-data="{ open: false }">
                
                <img src="../public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true">
                

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
    
    <div class="pintper-container config-container">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Contacto</h1>
                <p>Dejá abajo tus sugerencias para mejorar pintper.</p>
                <hr>
            </div>
        </div>
        <div class="pintper-row">
            <div class="pintper-col-16">
                <form action="#" method="post">
                    <input type="text" name="Nombre" placeholder="Nombre" class="pintper-textbox"> <br>
                    <input type="email" name="Correo" placeholder="Correo" class="pintper-textbox"> <br>
                    <textarea placeholder="Mensaje" class="pintper-textarea"></textarea> <br>
                    <input type="submit" value="Enviar" class="pintper-button">
                </form>

                <a href="<?php echo constant('URL')?>usuario/config" class="pintper-button-op2">
                    Volver
                </a>
            </div>
        </div>
    </div>

    
</body>
</html>