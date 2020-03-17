<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/usuarioStyle.css">
	<link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
    <title>Registrar usuario</title>
</head>
<body>

    <div class="login-usuario">

    <div class="contenedor-izquierda">
        <h1>PINTPER</h1>
        <p>Registro de usuarios birreros</p>

        <div class="home-link">
            <a href="<?php echo constant('URL')?>home">
                <svg version="1.1" baseProfile="basic" id="home-link"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#121012;}
                </style>
                <path id="house-home-icon" class="st0" d="M512,273.5L257.6,19l-1.3,1.3l-1.3-1.3L0.4,273.5l25.4,25.4l24.3-24.3v218.8h10.5h25.5
                    h94.3h30.7h5.2V305.5H295v187.9h15h21h93.6h35.9v-35.9V272.8l26.1,26.1L512,273.5z M424.5,457.5h-93.6v-152v-35.9H295h-78.6h-35.9
                    v35.9v152H86.1V238.6L256.2,68.5l168.3,168.3V457.5z"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="contenedor-derecha">

        <div class="registrar-link registro">
            <p>Ya sos miembro?  <a href="<?php echo constant("URL");?>Usuario"> Inicia sesion!</a></p>
        </div>

        <div class="form-iniciar-sesion">

            <div class="contenedor-flex registrar-view">
                <h1>Registrarme</h1>
                <p><?php echo $this->mensaje; ?><?php echo $this->Error?></p>
            
                <form action="#" method="post" onsubmit="return registrarUsuarioComun();">

                    <label for="nombreUsuario">Nombre de usuario</label> <br>
                    <input type="text" name="nombreUsuario" placeholder="Nombre de usuario" class="pintper-textbox" id="nombre" required> <br>

                    <label for="correoUsuario">Correo</label> <br>
                    <input type="email" name="correoUsuario" placeholder="Correo electronico" class="pintper-textbox" id="correo" required> <br>
                    
                    <label for="claveUsuario">Contraseña</label> <br>
                    <input type="password" name="claveUsuario" placeholder="Clave" class="pintper-textbox" id="clave" required> <br>
                    
                    <label for="provincias">Provincia</label> <br>
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

                    <input type="submit" value="Registrar" class="pintper-button"> <br>

                </form>

            </div>
        </div>
    </div>

    </div>

    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>
</body>
</html>
