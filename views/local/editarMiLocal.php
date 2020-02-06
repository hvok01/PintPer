<h1>Editar Local: Nombre Local</h1>
<hr>
<input type="button" value="Editar">
<form action="">
    <input type="text" name="Nombre" id="" placeholder="Nombre">
    <input type="text" name="Telefono" id="" placeholder="Telefono">
    <input type="text" name="Direccion" id="" placeholder="Direccion">
    <input type="button" value="Seleccionar Ubicacion">

    <h1>Horario de atencion</h1>
    <hr>
    <input type="text" name="Desde" id="" placeholder="Desde">
    <input type="text" name="Hasta" id="" placeholder="Hasta">
    <input type="checkbox" name="Lunes" id="">Lunes
    <input type="checkbox" name="Martes" id="">Martes
    <input type="checkbox" name="Miercoles" id="">Miercoles
    <input type="checkbox" name="Jueves" id="">Jueves
    <input type="checkbox" name="Viernes" id="">Viernes
    <input type="checkbox" name="Sabado" id="">Sabado
    <input type="checkbox" name="Domingo" id="">Domingo

    <input type="submit" value="Guardar">
</form>

<a href="<?php echo constant('URL')?>home/user_prop">Volver</a>
