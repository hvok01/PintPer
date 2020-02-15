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

                        <select name="provinicas" class="pintper-option">
                            <option value="Buenos Aires"></option>
                            <option value="Catamarca">Catamarca</option>
                            <option value="Chaco">Chaco</option>
                            <option value="Chubut">Chubut</option>
                            <option value="Córdoba">Córdoba</option>
                            <option value="Corrientes">Corrientes</option>
                            <option value="Entre Ríos">Entre Ríos</option>
                            <option value="Formosa">Formosa</option>
                            <option value="Jujuy">Jujuy</option>
                            <option value="La Pampa">La Pampa</option>
                            <option value="La Rioja">La Rioja</option>
                            <option value="Mendoza">Mendoza</option>
                            <option value="Misiones">Misiones</option>
                            <option value="Neuquén">Neuquén</option>
                            <option value="Río Negro">Río Negro</option>
                            <option value="Salta">Salta</option>
                            <option value="San Juan">San Juan</option>
                            <option value="San Luis" selected>San Luis</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                            <option value="Santa Fe">Santa Fe</option>
                            <option value="Santiago del Estero">Santiago del Estero</option>
                            <option value="Tierra del Fuego">Tierra del Fuego</option>
                            <option value="Tucumán">Tucumán</option>
                        </select> <br>

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
