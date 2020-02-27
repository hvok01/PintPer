<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/headerPintper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/usuarioStyle.css">
    <link rel="icon" href="<?php echo constant('URL')?>public/img/Favicon2.png">
    <!-- Alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.10.1/dist/alpine.js" defer></script>
    <title>Local: Ver mas</title>
</head>
<body>
    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="<?php echo constant('URL')?>home/user_comun"><img src="<?php echo constant('URL')?>public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container" >
                    <!-- Formulario para enviar la busqueda -->
                    <form action="<?php echo constant('URL')?>local/verLocales" method="POST" class="form-busqueda">
                        <input type="text" name="busqueda" placeholder="Buscar local" class="pintper-txt-busqueda" id="txt-busqueda">
                        <input type="submit" value="" class="pintper-btn-buscar" onclick="return validarBusqueda();">
                    </form>
                </div>
            </div>
            <div class="pintper-col-1" x-data="{ open: false }">

                <img src="<?php echo constant('URL')?>public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true">
                

                <div class="menu-pintper-nav"  x-show="open" @click.away="open = false">
                    <ul>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>local/verLocales">Ver Locales</a></li>
                        <li class="items-fade"><a href="#Promociones">Promociones</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>usuario/config">Configuraciones</a></li>
                        <li class="items-fade"><a href="<?php echo constant('URL')?>Usuario">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <?php $local=$this->local;?><!--Obtenemos el local a mostrar-->
    <div class="pintper-container verLocal">

        <div class="pintper-row">
        
            <div class="pintper-col-8">
                <h2><?php echo $local->Nombre;?></h2>
                <h3><?php echo $local->Direccion;?></h3>
            </div>
            <div class="pintper-col-8">
                <p>Horario de atencion</p>
                <p><?php echo $local->HorarioAtencion;?></p>
            </div>
        </div>

        <div class="pintper-row">
                <div class="pintper-col-8">
                    <!--Dentro de ese div se mostraria el mapa -->
                    <div class="mapa"></div>
                </div>
                <div class="pintper-col-8">
                    <hr>
                    <h2>Nuestras Cervezas</h2>

                    <iframe src="<?php echo constant('URL')?>estilo/verModuloEstilos" frameborder="0" class="moduloCerveza"></iframe>

                            
                </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16 container-btn-local">
                <a href="<?php echo constant('URL')?>local/verCompleto/<?php echo $local->LocalId; ?>" class="pintper-button-op2">Regresar</a>
            </div>
        </div>
        

    </div>

    <script src="<?php echo constant("URL")?>public/js/navScript.js"></script>
    
    <script>
        function mostrarMapa() {
            navigator.geolocation.getCurrentPosition(fn_ok,fn_mal);
            function fn_mal(){}

            function fn_ok(rta){

                var map = document.getElementById('mapa');
                /******Localizacion Local**********/
                var lat = <?php echo $local->Latitud;?>;
                var lon = <?php echo $local->Longitud;?>;            
                var latLon = new google.maps.LatLng(lat, lon);//coordenas del local

                /******Localizacion Usuario**********/
                var userLat=rta.coords.latitude;
                var userLon=rta.coords.longitude;
                var gLatLon=new google.maps.LatLng(userLat,userLon);//coordenadas del usuario

                //Centrar en mapa en la localizacion del local
                var configMap = {
                    zoom: 15,
                    center: latLon
                }
                            
                var gMapa = new google.maps.Map(map, configMap);//Crea el mapa
                
                var configMarker = {//marcador del local
                    position: latLon,
                    map: gMapa,
                    title: '<?php echo $local->Nombre;?>'
                }

                var configMarker2 = {//marcador del usuario
                    position: gLatLon,
                    map: gMapa,
                    title:'Usted esta aca'
                }
                
                //Coloca los marcadores en el mapa
                var marker = new google.maps.Marker(configMarker);
                var markerUser = new google.maps.Marker(configMarker2);

                //Dibuja un circulo al rededor del marcador del local
                var options = {
                    strokeColor: "#0000FF",
                    strokeOpacity: .35,
                    strokeWeight: 2,
                    fillColor: "#FF0000",
                    fillOpacity: .15,
                    map: gMapa,
                    center: latLon,
                    radius: 300
                }
                var circle = new google.maps.Circle(options);
                //fin dibuja circulo

                //***Dibuja la ruta desde el usuario hasta la ubicacion del Local***
                var objConfigDr={
                    map: gMapa,
                    suppressMarkers: true
                }

                var objConfigDs={
                    origin:gLatLon,
                    destination:latLon,
                    travelMode: google.maps.TravelMode.DRIVING
                }

                var ds=new google.maps.DirectionsService();
                var dr=new google.maps.DirectionsRenderer(objConfigDr);

                ds.route(objConfigDs, fnRutear);

                function fnRutear(resultados, status){
                    //muestra la linea entre A y B
                    if(status=='OK'){
                        dr.setDirections(resultados);
                    }else{
                        alert('Hubo un Error');
                    }
                }
                //*****Fin dibuja ruta*****************
            }        

        }
        window.addEventListener("load", mostrarMapa, false);
    </script>
</body>
</html>