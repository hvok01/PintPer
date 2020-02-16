<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/propietarioStyle.css">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src='http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCfIMAGCSKeLJPoUwDPnGz7pB4-exX76Dk'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Local: editar</title>
</head>
<body>

    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="<?php echo constant('URL')?>home/user_prop"><img src="<?php echo constant("URL")?>public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container" >
                    
                </div>
            </div>
            <div class="pintper-col-1" x-data="{ open: false }">

                <img src="<?php echo constant("URL")?>public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true">
                

                <div class="menu-pintper-nav"  x-show="open" @click.away="open = false">
                    <ul>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Estilo/agregarEstilo">Agregar Estilos</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Estilo/verMisEstilos">Ver mis Estilos</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>publicacion">Subir Publicidad</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/agregar">Agregar Local</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/verMisLocales">Ver mis Locales</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>propietario/configuraciones">Configuracion</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>propietario">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="pintper-container agregar-local">

        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Editar Local: Nombre Local</h1>
                <button>Editar</button>
                <hr>
            </div>
        </div>
        
        <form action="">

            <div class="pintper-row">

                <div class="pintper-col-8">
                    <input type="text" name="Nombre" placeholder="Nombre" class="pintper-textbox">
                    <input type="text" name="Telefono" placeholder="Telefono" class="pintper-textbox"> 
                </div>
                <div class="pintper-col-8">
                    <input type="text" name="Direccion" placeholder="Direccion" class="pintper-textbox" id="ModalMapAddress" value="">
                    <input type="button" value="Seleccionar Ubicacion" class="pintper-button-op2" data-toggle="modal" data-target="#ModalMap">

                </div>

            </div>

            <div class="pintper-row">
                <div class="pintper-col-16">
                    <h1>Horario de atencion</h1>
                    <hr>
                </div>
            </div>

            <div class="pintper-row">
                <div class="pintper-col-8">
                    <input type="text" name="Desde" placeholder="Desde" class="pintper-textbox">
                </div>
                <div class="pintper-col-8">
                    <input type="text" name="Hasta" placeholder="Hasta" class="pintper-textbox">
                </div>
            </div>

            <div class="pintper-row">
                <div class="pintper-col-16 checkboxs">
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Lunes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Martes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Miercoles
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Jueves
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Viernes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Sabado
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" checked="checked">Domingo
                        <span class="chequeado"></span>
                    </label>
                </div>
            </div>
            
            <div class="pintper-row">
                <div class="pintper-col-16">
                    <button class="pintper-button-marron-claro volver"><a href="<?php echo constant('URL')?>home/user_prop">Volver</a></button>
                    <input type="submit" value="Guardar" class="pintper-button">
                </div>
            </div>

        </form>
        
    </div>

    <!-- implementacion modulo mapa -->

    <div class="modal fade" id="ModalMap" tabindex="-1" role="dialog" >
        <style>.pac-container { z-index: 99999; }</style>
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
        <div class="form-horizontal">
        <div class="form-group">
        <label class="col-sm-2 control-label">Ubicación:</label>
        <div class="col-sm-9">

        </div>
        <div class="col-sm-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        </div>
        <div id="ModalMapPreview" style="width: 100%; height: 400px;"></div>
        <div class="clearfix">&nbsp;</div>
        <div class="m-t-small">
        <label class="p-r-small col-sm-1 control-label">Lat.:</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" id="ModalMap-lat" />
        </div>
        <label class="p-r-small col-sm-2 control-label">Long.:</label>

        <div class="col-sm-3">
        <input type="text" class="form-control" id="ModalMap-lon" />
        </div>
        <div class="col-sm-3">
        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" >Aceptar</button>
        </div>

        </div>
        <div class="clearfix"></div>
        </div>
        </div>
        </div>
        </div>
        </div>

    <script>

        $("#ModalMapPreview").locationpicker({

        location: {
        latitude: -33.302103,
        longitude: -66.337091
        },
        enableAutocomplete: true,
        inputBinding: {
        latitudeInput: $("#ModalMap-lat"),
        longitudeInput: $("#ModalMap-lon"),
        locationNameInput: $("#ModalMapAddress")
        },



        onchanged: function (currentLocation, radius, isMarkerDropped) {
        $("#ModalMapAddress").val();

        // console.log($("#ModalMapAddress").val());
        }
        });
        $("#ModalMap").on("shown.bs.modal", function () {
        $("#ModalMapPreview").locationpicker("autosize");
        });

    </script>


</body>
</html>