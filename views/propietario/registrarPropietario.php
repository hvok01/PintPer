<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar: Dueño de local</title>
</head>
<body>
    <h1>Registrar Dueño de local</h1>
    <p>Podes registrarte para ofrecer puntos de recarga completando el siguiente formulario:</p>
    <hr>
    <div>
        <form action="registrar" method="post">
            <input type="text" name="Nombre" id="" placeholder="Nombre">
            <input type="text" name="Apellido" id="" placeholder="Apellido">
            <input type="text" name="Documento" id="" placeholder="Documento">
            <input type="text" name="Correo" id="" placeholder="Correo">
            <input type="text" name="Clave" id="" placeholder="Clave">
            <input type="submit" value="Registrarme">
        </form>

    </div>
    <?php
    if($this->mensaje!=""){
        echo "<p>".$this->mensaje."</p>";
    }    
?>
    <p> ¿Ya tenes cuenta? <a href="<?php echo constant('URL')?>Propietario">Inicía sesion</a> </p>
</body>
</html>