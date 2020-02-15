<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"><link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/propietarioStyle.css">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Local: editar</title>
</head>
<body>

    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="<?php echo constant('URL')?>home/user_prop"><img src="<?php echo constant("URL")?>public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container" >
                    
                </div>
            </div>
            <div class="pintper-col-1" x-data="{ open: false }">

                <img src="<?php echo constant("URL")?>public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true">
                

                <div class="menu-pintper-nav"  x-show="open" @click.away="open = false">
                    <ul>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Estilo/agregarEstilo">Agregar Estilos</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Estilo/verMisEstilos">Ver mis Estilos</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>publicacion">Subir Publicidad</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/agregar">Agregar Local</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/verMisLocales">Ver mis Locales</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>propietario/configuraciones">Configuracion</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>propietario">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="pintper-container agregar-local">

        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Editar Local: Nombre Local</h1>
                <button>Editar</button>
                <hr>
            </div>
        </div>
        
        <form action="">

            <div class="pintper-row">

                <div class="pintper-col-8">
                    <input type="text" name="Nombre" id="" placeholder="Nombre" class="pintper-textbox">
                    <input type="text" name="Telefono" id="" placeholder="Telefono" class="pintper-textbox"> 
                </div>
                <div class="pintper-col-8">
                    <input type="text" name="Direccion" id="" placeholder="Direccion" class="pintper-textbox">
                    <input type="button" value="Seleccionar Ubicacion" class="pintper-button-op2">

                </div>

            </div>

            <div class="pintper-row">
                <div class="pintper-col-16">
                    <h1>Horario de atencion</h1>
                    <hr>
                </div>
            </div>

            <div class="pintper-row">
                <div class="pintper-col-8">
                    <input type="text" name="Desde" placeholder="Desde" class="pintper-textbox">
                </div>
                <div class="pintper-col-8">
                    <input type="text" name="Hasta" placeholder="Hasta" class="pintper-textbox">
                </div>
            </div>

            <div class="pintper-row">
                <div class="pintper-col-16 checkboxs">
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Lunes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Martes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Miercoles
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Jueves
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Viernes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Sabado
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Domingo
                        <span class="chequeado"></span>
                    </label>
                </div>
            </div>
            
            <div class="pintper-row">
                <div class="pintper-col-16">
                    <button class="pintper-button-marron-claro volver"><a href="<?php echo constant('URL')?>home/user_prop">Volver</a></button>
                    <input type="submit" value="Guardar" class="pintper-button">
                </div>
            </div>

        </form>
        
    </div>


</body>
</html>