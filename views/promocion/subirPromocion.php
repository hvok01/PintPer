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
    <title>Promocion</title>
</head>
<body>
    
    <?php
        include_once 'header_prop.php';
    ?>

    <div class="pintper-container subir-promo">

        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Subir promocion</h1>
                <p>Subí una imagen ofertando tus estilos.</p>
                <small>La imagen debe contar con un peso maximo de 25mb</small>
                <hr>
            </div>
        </div>

        <form action="<?php echo constant('URL');?>promocion/cargarPromocion" method="post" enctype="multipart/form-data">

        <div class="pintper-row">

            <div class="pintper-col-16">
                    <div class="contenedor-foto" id="contenedorFoto">
                            
                    <img src="" alt="Imagen Previa" class="imagen_previa" style="display: none; width: 100%; height: 100%; object-fit: cover;" id="imagenPrevia">

                    <label class="contenedor-archivo">
                                Seleccionar foto
                    <input type="file" accept="image/*" id="estiloSubir" name="imagen">
                    </label>
                </div>
            </div>
        </div>

        <div class="pintper-row">

            <div class="pintper-col-16 botones-derecha">

                <input type="submit" value="Guardar" class="pintper-button">
                <button class="pintper-button-marron-claro"><a href="<?php echo constant("URL")?>home/user_prop">Volver</a></button>
        

            </div>
        </div>

        </form>
        
    </div>

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
                contenedorArchivo.style.top = "44vh";
            }
            
        });


    </script>
</body>
</html>