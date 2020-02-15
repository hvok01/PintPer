<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="public/css/usuarioStyle.css">
    <link rel="icon" href="public/img/Favicon2.png">
    <title>Registrar usuario</title>
</head>
<body>
    <!--nav bar-->
    <?php include('header.php'); ?>

    <div class="pintper-container">
            <div class="pintper-row usuario-row">
                
                <div class="pintper-col-16">
                    <h3>Registro usuario comun</h3>

                    <p>Podes registrarte para encontrar puntos de recarga <br> completando el siguiente formulario:</p>
                    <form action="registro" method="post">
        
                        <input type="text" name="nombreUsuario" id="" placeholder="Nombre de usuario" class="pintper-textbox"> <br>

                        <input type="text" name="correoUsuario" id="" placeholder="Correo electronico" class="pintper-textbox"> <br>

                        <input type="password" name="claveUsuario" id="" placeholder="Clave" class="pintper-textbox"> <br>

                        <input type="password" name="repetirClaveUsuario" id=""  placeholder="Repetir clave" class="pintper-textbox"> <br>

                        <input type="submit" value="Registrarme" class="pintper-button">

                        <a href="#">Olvidé mi contraseña</a>
                    </form>
                        <?php
                            if($this->mensaje!=""){
                                echo "<p>".$this->mensaje."</p>";
                            }    
                        ?>

                        <p> ¿Ya tenes cuenta? <a href="<?php echo constant("URL");?>Usuario">Inicía sesion</a> </p>
                </div>
            </div>
    </div>	
</body>
</html>