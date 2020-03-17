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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/propietarioStyle.css">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Estilos: editar</title>
</head>
<body>

    <!--nav bar-->
    <?php
        include_once 'header_prop.php';
    ?> 

    <div class="pintper-container propietario">
        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Editar: <?php echo $this->estilos->Nombre;?></h1>
                <hr>
                    <form action="<?php echo constant('URL');?>estilo/updateEstilo/<?php echo $this->estilos->CervezaId;?>" class="formulario-agregar-estilos" onsubmit="return validarAgregarEstilo();" method="post" enctype="multipart/form-data">

                        <!--Checkear con php que si ya hay una foto subida, cambiar style=display: none, por block y agregar el link a src-->
                        <div class="contenedor-foto" id="contenedorFoto">
                            <?php 
                                $carpeta=constant('URL').'public/imagenes-usuarios/'.$this->estilos->Imagen;
                               
                            ?>
                            <img src="<?php echo $carpeta;?>" alt="Imagen Previa" class="imagen_previa" style="display: block; width: 100%; height: 100%; object-fit: cover;" id="imagenPrevia">

                            <label class="contenedor-archivo">
                                Seleccionar foto
                                <input type="file" accept="image/*" id="estiloSubir" name="Imagen">
                                <input type="hidden" name="ImagenOld" value="<?php echo $this->estilos->Imagen;?>">
                            </label>
                        </div>
                        <div class="contenedor-inputs">
                            <input type="text" name="Nombre" placeholder="Nombre" class="pintper-textbox estilos-txt" id="nombre" value="<?php echo $this->estilos->Nombre;?>" required autofocus>
                            <input type="text" name="Tipo" placeholder="Tipo" class="pintper-textbox estilos-txt" id="tipo" value="<?php echo $this->estilos->Tipo;?>" required>
                            <input type="text" name="Descripcion" placeholder="Descripcion" class="pintper-textbox estilos-txt" id="descripcion" value="<?php echo $this->estilos->Descripcion;?>" required> <br>
                            
                            <span id="mensaje-error"></span> <br>
                            <a href="<?php echo constant('URL')?>Estilo/verMisEstilos/<?php echo $this->local->LocalId;?>" class="pintper-button-marron-claro">Volver</a>
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