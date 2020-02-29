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
    <title>Estilos: editar</title>
</head>
<body>

   <?php
    include_once 'header_prop.php';
?>

    <div class="pintper-container agregar-publicidad">
    
        <div class="pintper-row">

            <div class="pintper-col-16">
                <h1>Agregá una publicidad para mostrar tus ofertas o destacar tus productos</h1>
                <hr>
                <p>Se recomienta que la imagen a subir tenga una resolucion de 1200px X 700px.</p>
                
                <form action="<?php echo constant("URL")?>Publicidad/publicar" class="formulario-subir-publicidad" onsubmit="return validarPublicidad();" method="post" enctype="multipart/form-data" >
                    <input type="text" name="Titulo" placeholder="Titulo" class="pintper-textbox" id="titulo" required autofocus> <br>
                    <input type="text" name="Descripcion" placeholder="Descripcion" class="pintper-textbox descripcion" id="descripcion" required>
                    <span><?php echo $this->mensaje;?></span>
                    <span id="mensaje-error"></span> <br>
                    <div class="contenedor-foto" id="contenedorFoto">
                    <!--Checkear con php que si ya hay una foto subida, cambiar style=display: none, por block y agregar el link a src-->
                            <img src="" alt="Imagen Previa" class="imagen_previa" style="display: none; width: 100%; height: 100%; object-fit: cover;" id="imagenPrevia">

                            <label class="contenedor-archivo">
                                Seleccionar foto
                                <input type="file" name="Foto" accept="image/*" id="estiloSubir" required="true">
                            </label>
                    </div>
                    <input type="submit" value="Guardar" class="pintper-button">
                    <button  class="pintper-button-marron-claro"><a href="<?php echo constant("URL")?>home/user_prop">Volver</a></button>
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
                contenedorArchivo.style.top = "30vh";
            }
            
        });


    </script>
</body>
</html>