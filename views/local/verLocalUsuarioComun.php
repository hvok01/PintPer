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