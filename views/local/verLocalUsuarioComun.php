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
    <title>Local</title>
</head>
<body>
    
    <?php   
   include_once 'header_user.php';
    ?>
    
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
            <div class="pintper-col-16">
                <!--Dentro de ese div se mostraria el mapa -->
                <div class="mapa" id="mapa2"></div>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16 container-btn-local">
                <!--Vuelve a donde estan todos los locales -->
                <a href="<?php echo constant('URL')?>home/user_comun" class="pintper-button-op2">Volver</a>
                <!--Ver más para ver cervezas y estilos del local -->
                <a href="<?php echo constant('URL')?>local/verMas/<?php echo $local->LocalId; ?>" class="pintper-button">Ver más</a>
                <div class="social-media">
                    <div class="facebook">
                        <a href="#">
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
                        </a>
                    </div>
                    <div class="instagram">
                        <a href="#">
                            <svg version="1.1" baseProfile="basic" id="instagram-icon"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                xml:space="preserve">
                            <style type="text/css">
                                .instagram{fill:#6E5D52;}
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
                        </a>
                    </div>
                    <div class="twitter">
                        <a href="#">
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
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<script src="<?php echo constant("URL")?>public/js/navScript.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCfIMAGCSKeLJPoUwDPnGz7pB4-exX76Dk"></script>
    

<script>
    function mostrarMapa() {
        navigator.geolocation.getCurrentPosition(fn_ok,fn_mal);
        function fn_mal(){}

        function fn_ok(rta){

            var map = document.getElementById('mapa2');
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