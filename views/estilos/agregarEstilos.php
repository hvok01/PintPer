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
    <title>Estilos:</title>
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

    <div class="pintper-container propietario">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Agregá un nuevo estilo de cerveza</h1>
                <hr>
                    <form action="" class="formulario-agregar-estilos" onsubmit="return validarAgregarEstilo();">


                        <div class="contenedor-foto" id="contenedorFoto">
                            
                            <img src="" alt="Imagen Previa" class="imagen_previa" style="display: none; width: 100%; height: 100%; object-fit: cover;" id="imagenPrevia">

                            <label class="contenedor-archivo">
                                Seleccionar foto
                                <input type="file" accept="image/*" id="estiloSubir">
                            </label>
                        </div>
                        <div class="contenedor-inputs">
                            <input type="text" name="Nombre" placeholder="Nombre" class="pintper-textbox estilos-txt" id="nombre" required autofocus>
                            <input type="text" name="Tipo" placeholder="Tipo" class="pintper-textbox estilos-txt" id="tipo" required>
                            <input type="text" name="Descripcion" placeholder="Descripcion" class="pintper-textbox estilos-txt" id="descripcion" required> <br>
                            
                            <span id="mensaje-error"></span> <br>
                            <a href="<?php echo constant('URL')?>Home/user_Prop" class="pintper-button-marron-claro">Volver</a>
                            <input type="submit" value="Guardar" class="pintper-button"> 
                        </div>
                        
                    </form>
            </div>
        </div>
    </div>

    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>

    <script>

        const contenedorFoto = document.getElementById("contenedorFoto");
        const inputImagen = document.getElementById("estiloSubir");
        const imagenPrevia = document.getElementById("imagenPrevia");
        const contenedorArchivo = contenedorFoto.querySelector(".contenedor-archivo");

        inputImagen.addEventListener("change", function() {

            const file = this.files[0];

            if (file) {
                const lector = new FileReader();

                imagenPrevia.style.display = "block";
                contenedorArchivo.style.top = "5vh";

                lector.addEventListener("load", function() {
                    imagenPrevia.setAttribute("src", this.result);
                });

                lector.readAsDataURL(file);
            } else {

                imagenPrevia.style.display = "none";
                imagenPrevia.setAttribute("src", "");
                contenedorArchivo.style.top = "65vh";
            }
            
        });


    </script>
</body>
</html>