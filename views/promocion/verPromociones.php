<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/img/Favicon2.png">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="../public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="../public/css/usuarioStyle.css">
	<link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Promos</title>
</head>
<body>

    <?php
        include_once 'header_user.php';
        $promociones=$this->promociones;
        $rows=sizeof($promociones);
        $carpeta=constant('URL').'public/imagenes-usuarios/promociones/';
    ?>

    <div class="contenedor-fotos">
        <?php
            for ($i=0; $i < $rows; $i++) { ?>
                <div class="item">

                    <img src="<?php echo $carpeta.$promociones[$i]->Imagen;?>" alt="imagen1" id="myImg" class="myImagen<?php echo $i;?>">

                    <div id="myModal" class="modal">

                        <span class="close">&times;</span>

                        <img class="modal-content" id="img01">

                    </div>  
                </div>
        <?php } ?>        
        
    </div>

    <script>
        var modal = document.querySelector(".modal");

        var elementosDiv = document.querySelectorAll(".item");

        const img = [];
        
        for(var i = 0; i < elementosDiv.length; i++){

            img.push(document.querySelector(".myImagen"+i));
        
        }

        for (var j = 0; j < img.length; j++) {

            var modalImg = document.querySelector(".modal-content");

            img[j].onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
            }

            var span = document.getElementsByClassName("close")[0];

            span.onclick = function() {
                modal.style.display = "none";
            }

        }

        
    </script>
</body>
</html>