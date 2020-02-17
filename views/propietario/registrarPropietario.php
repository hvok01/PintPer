<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="../public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="../public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="../public/css/usuarioStyle.css">
	<link rel="icon" href="../public/img/Favicon2.png">
    <title>Registrar Dueño de local</title>
</head>
<body>
    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="#"><img src="../public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-15">
                <div class="pintper-iniciar-sesion-container">
                    <a href="#"><img src="../public/img/customer.png" alt="Iniciar Sesion"></a>
                </div>
            </div>
        </div>
    </header>

    <div class="pintper-container">
            <div class="pintper-row usuario-row">
                
                <div class="pintper-col-16">
                    <h3>Registrar Dueño de local</h3>

                    <p>Podes registrarte para ofrecer puntos de recarga <br> completando el siguiente formulario:</p>
                    <form action="registrar" method="post" onsubmit="return validarRegistroDuenio();">

                        <span id="mensaje-error"><?php echo $this->Error?></span><br>
                    
                        <input type="text" name="Nombre" placeholder="Nombre" class="pintper-textbox" id="nombre" required
                        value='<?php if(isset($_POST['Nombre']))echo $_POST['Nombre']?>'> <br>

                        <input type="text" name="Apellido" placeholder="Apellido" class="pintper-textbox" id="apellido" required
                        value='<?php if(isset($_POST['Apellido']))echo $_POST['Apellido']?>'> <br>

                        <input type="number" name="Documento" placeholder="Documento" class="pintper-textbox" id="documento" required
                        value='<?php if(isset($_POST['Documento']))echo $_POST['Documento']?>'> <br>

                        <input type="email" name="Correo" placeholder="Correo" class="pintper-textbox" id="correo" required
                        value='<?php if(isset($_POST['Correo']))echo $_POST['Correo']?>'> <br>

                        <input type="password" name="Clave" placeholder="Clave" class="pintper-textbox" id="clave" required> <br>

                        <select name="provinicas" class="pintper-option">
                            <option value="Buenos Aires">Buenos Aires</option>
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
                                echo "<p style='color:green; font-size:14px;'>".$this->mensaje."</p>";
                            }    
                        ?>

                    <p> ¿Ya tenes cuenta? <a href="<?php echo constant("URL");?>Propietario">Inicía sesion</a> </p>
                </div>
            </div>
    </div>
    
    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>
    
</body>
</html>