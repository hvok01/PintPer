<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="../public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="../public/css/usuarioStyle.css">
    <link rel="icon" href="../public/img/Favicon2.png">
    <title>Registrar usuario</title>
</head>
<body>
    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                
                    <a href="<?php echo constant('URL')?>usuario"><img src="../public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-15">
                <div class="pintper-iniciar-sesion-container">
                    <a href="<?php echo constant('URL')?>usuario"><img src="../public/img/customer.png" alt="Iniciar Sesion"></a>
                </div>
            </div>
        </div>
    </header>

    <div class="pintper-container">
            <div class="pintper-row usuario-row">
                
                <div class="pintper-col-16">
                    <h3>Registrarme</h3>

                    <p>Podes registrarte para encontrar puntos de recarga <br> completando el siguiente formulario:</p>
                    <form action="registro" method="post">
        
                        <input type="text" name="nombreUsuario" placeholder="Nombre de usuario" class="pintper-textbox"> <br>

                        <input type="text" name="correoUsuario" placeholder="Correo electronico" class="pintper-textbox"> <br>

                        <input type="password" name="claveUsuario" placeholder="Clave" class="pintper-textbox"> <br>

                        <input type="password" name="repetirClaveUsuario"  placeholder="Repetir clave" class="pintper-textbox"> <br>

                        <input type="submit" value="Registrarme" class="pintper-button"> <br>
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