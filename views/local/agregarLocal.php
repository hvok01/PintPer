<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if (!isset($_SESSION['usuario_registrado'])) {
    header('Location:'.constant("URL").'index.php');
}
?>
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant("URL")?>public/img/Favicon2.png">
    <link rel="stylesheet" href="<?php echo constant("URL")?>public/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/pintperGrid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant("URL")?>public/css/propietarioStyle.css">
    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src='http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCfIMAGCSKeLJPoUwDPnGz7pB4-exX76Dk'></script>
    <script src="<?php echo constant("URL")?>public/js/locationpicker.jquery.min.js"></script>
    <script src="<?php echo constant("URL")?>public/js/bootstrap.min.js"></script>
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Local: agregar</title>
    
</head>
<body>

    <?php
        include_once 'header_prop.php';
    ?>


    <div class="pintper-container agregar-local">

        <div class="pintper-row">
            <div class="pintper-col-16">
                <h1>Agrega un nuevo local para llegar a mas gente.</h1>
                <hr>
            </div>
        </div>
        
        <form action="agregarLocal" onsubmit="return validarAgregarLocal();" method="post">

            <div class="pintper-row">

                <div class="pintper-col-8">
                    <input type="text" name="Nombre" placeholder="Nombre" class="pintper-textbox" id="nombre" required autofocus>
                    <input type="text" name="Telefono" placeholder="Telefono" class="pintper-textbox" id="telefono" required> 
                </div>
                <div class="pintper-col-8">

                    <input type="text" name="Direccion" placeholder="Direccion" class="pintper-textbox" 
                    id="ubi">
                    
                    <input type="button" value="Seleccionar Ubicacion" class="pintper-button-op2"  
                    data-toggle="modal" data-target="#ModalMap">

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
                    <label for="Desde">Mañana desde:</label> <br>
                    <input type="time" name="Desde" class="pintper-textbox" id="desdeHora" required value="08:00"> <br>
                    <label for="Desde2">Tarde/Noche Desde:</label> <br>
                    <input type="time" name="Desde2" class="pintper-textbox" id="desdeHora" required value="17:00">
                </div>
                <div class="pintper-col-8">
                    <label for="Hasta">Hasta:</label> <br>
                    <input type="time" name="Hasta" class="pintper-textbox" id="hastaHora" required value="14:00"> <br>
                    <label for="Hasta2">Hasta:</label> <br>
                    <input type="time" name="Hasta2" class="pintper-textbox" id="desdeHora" required value="23:00">
                </div>
            </div>

            <div class="pintper-row">
                <div class="pintper-col-16 checkboxs">
                    <label class="label-checkbox">
                        <input type="checkbox" name="Dias[]" checked="checked" value="L">Lunes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" name="Dias[]" checked="checked" value="Ma">Martes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" name="Dias[]" checked="checked" value="Mi">Miercoles
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" name="Dias[]" checked="checked" value="J">Jueves
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" name="Dias[]" checked="checked" value="V">Viernes
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" name="Dias[]" value="S">Sabado
                        <span class="chequeado"></span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" name="Dias[]" value="D">Domingo
                        <span class="chequeado"></span>
                    </label>
                </div>
            </div>
            
            <div class="pintper-row">
                <div class="pintper-col-16">
                    <h1>Redes sociales</h1>
                    <hr>
                </div>
            </div>    

            <div class="pintper-row social-media">
                    <div class="pintper-col-6">
                        <svg version="1.1" baseProfile="basic" id="facebook-icon"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            xml:space="preserve">
                        <style type="text/css">
                            .facebook{fill:#6E5D52;}
                        </style>
                        <path id="facebook-icon-path" class="facebook" d="M471.7,0H40.3C18,0,0,18,0,40.3v431.4C0,494,18,512,40.3,512h431.4
                            c22.2,0,40.3-18,40.3-40.3V40.3C512,18,494,0,471.7,0z M465.2,465.2H345.7V306.7h67.6v-66.3h-67.6v-72.7c0-2.9,1.1-5.7,3.1-7.7
                            c2.4-2.5,5.9-5.3,9.9-5.3c7.1,0,54.6,0,54.6,0V92.3h-72.8c0,0-60.4,4.2-69.9,69.4c-0.2,1.4-0.3,2.7-0.3,4.1v74.6h-58.5v66.3h58.5
                            v158.5H46.8V46.8h418.4V465.2z"/>
                        </svg>
                        <input type="text" name="Facebook" placeholder="Facebook">
                    </div>

                    <div class="pintper-col-5">
                        <svg version="1.1" baseProfile="basic" id="instagram-icon"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            xml:space="preserve">
                        <style type="text/css">
                            .instagram{fill: #6E5D52;}
                        </style>
                        <g id="instagram-icon-path">
                            <path class="instagram" d="M256,165.4c50,0,90.6,40.6,90.6,90.6S306,346.6,256,346.6S165.4,306,165.4,256S206,165.4,256,165.4 M256,118.2
                                c-76,0-137.8,61.8-137.8,137.8S180,393.8,256,393.8S393.8,332,393.8,256S332,118.2,256,118.2L256,118.2z"/>
                            <circle class="instagram" cx="393.8" cy="112.9" r="21"/>
                            <path class="instagram" d="M370.2,47.3c52,0,94.5,42.5,94.5,94.5v228.4c0,52-42.5,94.5-94.5,94.5H141.8c-52,0-94.5-42.5-94.5-94.5V141.8
                                c0-52,42.5-94.5,94.5-94.5H370.2 M370.2,0H141.8C63.6,0,0,63.6,0,141.8v228.4C0,448.4,63.6,512,141.8,512h228.4
                                c78.2,0,141.8-63.6,141.8-141.8V141.8C512,63.6,448.4,0,370.2,0L370.2,0z"/>
                        </g>
                        </svg>
                        <input type="text" name="Instagram" placeholder="Instagram"> 
                    </div>

                    <div class="pintper-col-5">
                        <svg version="1.1" baseProfile="basic" id="twitter-icon"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            xml:space="preserve">
                        <style type="text/css">
                            .twitter{fill:#6E5D52;}
                        </style>
                        <path id="twitter-icon-path" class="twitter" d="M447.5,109.5c24.2-15.7,42.2-40.1,49.4-68.8c-4.9,4.8-10.1,9.2-15.8,13.1c0,0,0,0,0,0
                            c-16.2,11.1-35.3,18.3-56,19.9c-1.4,0.1-2.8,0.2-4.2,0.3c-19-20.6-46.2-33.4-76.4-33.4c-1.1,0-2.1,0-3.2,0.1
                            c-2.2,0.1-4.4,0.2-6.6,0.4c-15.3,1.4-29.5,6.2-42.2,13.5c-4.2,2.4-8.1,5.1-11.9,8c-6.3,4.9-12,10.6-17,16.8
                            c-14.4,17.8-23,40.5-23,65.2c0,9.6,1.3,18.9,3.7,27.7c-1.5,0-2.9,0-4.4-0.1c-4.1-0.1-8.1-0.3-12.1-0.6l-2.6-0.2l-2.3-0.2
                            c-8.6-0.8-17.2-1.9-25.6-3.5c-12.9-2.3-25.5-5.5-37.8-9.5c-9.9-3.2-19.6-7-29.1-11.3c0,0,0,0,0,0c-29-13.1-55.4-30.9-78.3-52.4
                            c-4.1-3.8-8.1-7.8-12-11.9c-6.9-7.3-13.4-14.9-19.5-22.8c-6,12.6-9.8,26.5-10.9,41.1c-0.2,2.9-0.3,5.8-0.3,8.7
                            c0,13.1,2.2,25.6,6.1,37.3c7.4,21.7,21,40.4,38.7,54.2c-0.4,0.7-0.9,1.5-1.3,2.2c-15.7-1.9-30.4-7-43.5-14.6
                            C10.5,216,21.1,241,38,260.2c20,22.9,49,37.8,81.4,39.3c-11.2,3.7-23.2,5.6-35.7,5.6c-13.8,0-27-2.4-39.3-6.9
                            c14.5,41.4,52,72.1,97.1,76.8C100.6,402.5,52.2,419.7,0,423c45.7,30.6,100.6,48.5,159.7,48.5c158.7,0,287.3-128.6,287.3-287.3
                            c0-6.5-0.2-12.9-0.6-19.3c1.1-5.3,1.7-10.7,1.9-16.2c28.1-10.7,51-32,63.7-59.1C493.6,102.1,471.4,109.4,447.5,109.5z"/>
                        </svg>
                        <input type="text" name="Twitter" placeholder="Twitter">
                    </div>
            </div>
            
            <div class="pintper-row">
                <div class="pintper-col-16 enviar-formulario">
                     <span><?php echo $this->mensaje;?></span>
                    <span id="mensaje-error"></span><br>                   
                    <button class="pintper-button-marron-claro volver"><a href="<?php echo constant('URL')?>home/user_prop">Volver</a></button>
                    <input type="submit" value="Agregar Local" class="pintper-button">
                </div>
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
                                        <input type="text" class="form-control" id="ModalMapAddress" />
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
                                    <input type="text" name="Lat" class="form-control" id="ModalMap-lat" />
                                </div>
                                    <label class="p-r-small col-sm-2 control-label">Long.:</label>

                                <div class="col-sm-3">
                                    <input type="text" name="Lon" class="form-control" id="ModalMap-lon" />
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
            <!-- FIN implementacion modulo mapa -->

        </form>

    </div>

        
    <script src="<?php echo constant("URL")?>public/js/validarForm.js"></script>

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
                $("#ubi").val($("#ModalMapAddress").val());
            }

        });
        $("#ModalMap").on("shown.bs.modal", function () {
            $("#ModalMapPreview").locationpicker("autosize");
        });
    </script>

</body>
</html>