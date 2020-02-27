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
                    <form action="#" method="post" onsubmit="return registrarUsuarioComun();">

                        <span id="mensaje-error"><?php echo $this->mensaje; ?></span>
                        <span id="mensaje-error"><?php echo $this->Error?></span><br>        
                        <span id="mensaje-error"></span><br>
                        
                        <input type="text" name="nombreUsuario" placeholder="Nombre de usuario" class="pintper-textbox" id="nombre" required> <br>

                        <input type="email" name="correoUsuario" placeholder="Correo electronico" class="pintper-textbox" id="correo" required> <br>

                        <input type="password" name="claveUsuario" placeholder="Clave" class="pintper-textbox" id="clave" required> <br>

                        <input type="password" name="repetirClaveUsuario" placeholder="Repetir clave" class="pintper-textbox" id="repetirClave" required> <br>

                        <select name="provincias" class="pintper-option">
                            <?php
                                for($i=0; $i<sizeof(PROVINCIAS);$i++){
                                    if(PROVINCIAS[$i]=="San Luis"){
                                        echo '<option value="'.PROVINCIAS[$i].'" selected>'.PROVINCIAS[$i].'</option>';
                                    }else{
                                        echo '<option value="'.PROVINCIAS[$i].'">'.PROVINCIAS[$i].'</option>';
                                    }
                                }
                            ?>                           
                        </select> <br>

                        <input type="submit" value="Registrarme" class="pintper-button"> <br>
                    </form>                        
                    <p> ¿Ya tenes cuenta? <a href="<?php echo constant("URL");?>Usuario">Inicía sesion</a> </p>
                </div>
            </div>
    </div>	

    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>
</body>
</html>
