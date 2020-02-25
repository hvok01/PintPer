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
    <!--nav bar-->
    <header class="pintper-container-nav">
        <div class="pintper-row">
            <div class="pintper-col-1">
                <div class="pintper-logo-container">
                    <a href="<?php echo constant('URL')?>home/user_comun"><img src="public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
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

                <img src="public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true">
                

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
<?php $local=$this->local;?>
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
                <div class="mapa" id="mapa2">
                    
                </div>
            </div>
        </div>

        <div class="pintper-row">
            <div class="pintper-col-16 container-btn-local">
                <!--Vuelve a donde estan todos los locales -->
                <a href="<?php echo constant('URL')?>home/user_comun" class="pintper-button-op2">Volver</a>
                <!--Ver más para ver cervezas y estilos del local -->
                <a href="<?php echo constant('URL')?>local/verMas" class="pintper-button">Ver más</a>
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
            var lat = <?php echo $local->Latitud;?>;
            var lon = <?php echo $local->Longitud;?>;
            var map = document.getElementById('mapa2');
            var latLon = new google.maps.LatLng(lat, lon);
            var configMap = {
                zoom: 15,
                center: latLon
            }
            var userLat=rta.coords.latitude;
            var userLon=rta.coords.longitude;
            var gLatLon=new google.maps.LatLng(userLat,userLon);
            
            var gMapa = new google.maps.Map(map, configMap);
            
            var configMarker = {
                position: latLon,
                map: gMapa,
                title: '<?php echo $local->Nombre;?>'
            }

            var configMarker2 = {
                position: gLatLon,
                map: gMapa,
                title:'Usted esta aca'
            }
            
            var marker = new google.maps.Marker(configMarker);
            var markerUser = new google.maps.Marker(configMarker2);

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
        }        

    }
    window.addEventListener("load", mostrarMapa, false);
</script>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2040.8843115434463!2d-66.33524657408462!3d-33.30227776182566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1581363369701!5m2!1ses-419!2sar" frameborder="0" style="border:0;" allowfullscreen="" class="googlemap"></iframe>-->

</body>
</html>