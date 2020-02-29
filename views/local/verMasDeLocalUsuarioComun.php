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
                    <a href="<?php echo constant("URL")?>home/user_comun">
                    <svg version="1.1" baseProfile="basic" id="pintper-logo-simple" 
						xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
						xml:space="preserve">
					<style type="text/css">
						.st0{fill:#F6F6FB;}
					</style>
					<g id="pintper-logo-simple">
						<g>
							<g>
								<g>
									<path class="st0" d="M45.3,269.6c-18.5,30.2-27.2,58.5-26.8,58.8c0.3,3,0.6,6.1,0.8,9.1C9.3,337.8,0,327.8,0,317.9
										c0-5.6,10.4-30.3,23.3-51.8c0,0.1,21.6-36.9,36.1-58.1c-10.4,4.7-20.1,10.6-26.2,17.2c-2.1,2.2-4.2,3.1-5.4,3.2
										c-1.2,0.1-1.9-0.5-1.9-1.6c0-1.7,1.5-4.4,5-8.1c17.7-18.5,42.8-30.5,61.3-33.2c13.9-1.9,23.9,1.8,23.9,13
										c0,11.6-5.6,21.9-12.5,30.2C82.5,255.8,45.3,269.8,45.3,269.6z M100.5,204.1c0-4.8-5-6.1-12.3-5.3c-2.3,3.8-6.4,10.6-10.2,16.7
										c-0.1,0.1-0.1,0.3-0.2,0.4c-8.9,13.7-8.3,12.4-18.1,30.2c-2.1,3.5-4.2,6.9-6.2,10.3C74.8,244.7,100.5,219.5,100.5,204.1z"/>
								</g>
							</g>
							<g>
								<g>
									<path class="st0" d="M148.3,247.7c1.8,3.5,3.6,6.9,5.4,10.4c-31.6,21.3-50.1,62.8-60.7,71.1c0,0.1,0,0.1,0,0.2
										c-2.1,0.3-2.7,1.4-3.5,1.5c-1.5,0.2-1.9-0.4-1.9-1.6c-8.1-1.6-15.2-10-15.2-18.5c0-9.8,35.5-86.1,49.9-88.7
										c0.4-0.1,0.6-0.1,1-0.2c13.5,1,13.3,9.5,13.3,9.5c-26.8,33.7-40.1,73.2-43.6,84.9C135.2,254.7,148.3,247.5,148.3,247.7z
										M130.7,205.3c0-6.9,6-16.6,8.9-19.9c2.1-1.2,4.6-2.3,7.3-2.8c5-0.9,10,0.6,12.5,8.6c-6,6.7-12,13.4-18.1,20.1
										C133.4,212.7,130.7,209.6,130.7,205.3z"/>
								</g>
							</g>
							<g>
								<g>
									<path class="st0" d="M254.4,236.1c-35.7,25.2-53.4,74.2-64.2,76.5c-1.5,0.3-1.7-0.3-1.7-1.5c-8.1-0.9-15.2-8.6-15.2-17.1
										c0-4.4,6.4-21.1,15.2-39.8c-20.1,26-37,56.7-44,64.8c0.1,0.9,0.3,1.9,0.4,2.8c-10.4,2-20.8-6.8-20.8-17.7
										c0-10,35.9-88.9,50.5-92.1c0.4-0.1,0.6-0.1,1-0.2c13.5,0.5,13.3,9,13.3,9.2c-23.7,30.9-37,66-42.4,82.4
										c33.2-56.9,53-79.2,62.7-87.3c5.4-8.3,10.4-14,14.1-14.8c0.2,0,0.6-0.1,0.8-0.2c13.3,0.3,13.1,8.8,13.1,9
										c-26.4,34.8-39.7,75.1-43.4,87.5c42-64.6,55-71.8,55-71.7C250.8,229.3,252.6,232.7,254.4,236.1z"/>
								</g>
							</g>
							<g>
								<g>
									<path class="st0" d="M336.1,153.6c0,6.4-3.7,14.5-9.1,18.8c-2.9,2.3-15.8,6.7-30.5,10.5c-2.1,3.4-3.5,7-5.2,10.1
										c-3.9,7-7.8,14-11.6,21c-18.9,30.5-29.3,61.2-32.4,72.1c0.6-1.4,1-2.1,1-2.1c43.4-67,56.7-73.9,56.7-73.9
										c1.9,3.5,3.7,6.9,5.6,10.4c-33.7,23.7-52.8,70.7-63.6,77.7c0,0.6,0,1.1,0,1.7c-10.6,2.5-21-6.2-21-17c0-6.2,11.4-35.4,25.3-61.7
										c0,0,7.9-14.9,17.5-32.3c-20.2,3.4-24.9,1.2-24.9-7.3c0-6.9,4.4-9.9,4.4-9.9c11-0.1,22-1.4,32.4-3.6
										c19.1-32.9,23.9-36.8,32-38.6c3.7-0.8,7.7,0.4,11.2,5.4c0,0-6.9,12.1-12.7,22.3c-0.1,0.2-0.3,0.3-0.4,0.5
										c-0.4,0.7-0.8,1.4-1.2,2.1c11-3.7,17.9-6.8,17.9-6.8c2.3-2.1,4.6-4.2,6.9-6.2C335.5,148.7,336.1,151.1,336.1,153.6z"/>
								</g>
							</g>
							<g>
								<g>
									<path class="st0" d="M369.5,190.5c0,14.1-10,35.2-28.2,62.5c-14.5,21.5-26,31.1-34.1,32.9c-8.7,2-13.5-5.1-13.7-15.6
										c0-1,0.4-2.8,1.2-5.3c-18.7,33.1-27,63.8-26.8,63.7c0.3,3,0.7,6.1,1,9.1c-10.2,2.4-19.9-5.5-19.9-15.9c0-5.4,11-34.3,24.1-58.6
										c0,0,39.9-76.1,48.8-81.2c2.5-2.2,5.8-4.6,9.1-5.3c3.3-0.7,6.9,0.2,10,4.1c4.2-5.6,8.3-7.9,11.6-8.6c7.3-1.4,12,4.5,12.3,4.7
										C368.1,180.4,369.5,184.9,369.5,190.5z M355.2,187c-0.2-0.6-1-3.1-1.5-5.1c-3.1,2.1-5.2,4.4-6.4,6.1
										c-10.6,14.5-43.6,68.5-43.6,78.5c0,1.2,0.6,1.7,1.9,1.5c3.9-0.9,10.8-11.4,24.5-30.1C344.6,218,355.2,189.1,355.2,187z"/>
								</g>
							</g>
							<g>
								<g>
									<path class="st0" d="M512,210.8c-32.2,15.5-50.9,56.9-61.7,64.9c0,0.1,0,0.1,0,0.2c-1.9,0.2-2.7,1.3-3.7,1.4
										c-1.2,0.1-1.7-0.4-1.7-1.7c-8.3-1.8-15.4-10.3-15.4-19c0-9.2,28.2-70.9,45.3-84.9c-3.9-0.4-8.1-0.7-12.5-0.3
										c-0.8,0.1-1.5,0.1-2.1,0.2c-6.6,3.3-48.6,55.8-66.5,79.5c-14.3,20.7-17.4,21.3-25.5,22.8c-8.1,1.5-14.3-2.2-14.3-13.4
										c0-8.1,3.1-20.2,11.2-36.7c18.5-38.4,36.6-60.1,52.8-62.4c1.9-0.3,3.5-0.3,5.4-0.1c1,0,13.1,1.4,13.1,12.3
										c0,2.5-0.6,5.7-2.3,9.2c0.4,2-11,27.2-47.8,41.5c-7.7,17.9-12.9,28.5-12.9,33c0,1,0.4,2.6,1,2.5c1.9-0.3,2.9-1.4,4.4-3.1
										c5-5.9-1.7,1.7,5.6-6.8c1.5-2.1,3-4.3,4.6-6.4c1.7-2.1,2.9-4,2.9-4c19.7-21.4,56.1-69.1,56.7-71.5c-0.2-1-0.4-2.2-0.4-3.9
										c0-4.4,2.7-6.3,10-7.2c0.1,0,0.1,0,0.2,0c0.4,0,1-0.1,1.7-0.1c28.2-2.2,35.1,6.8,35.1,20c0,1.2-0.2,2.5-0.4,3.5
										c-0.1-0.1-0.1-0.1-0.2-0.2c0,0.2,0,0.4,0,0.4c-27,30.2-40.5,70.4-44.2,82.1c43-60.2,56.1-63.1,56.1-63.4
										C508.3,203.1,510.1,206.9,512,210.8z M424.8,173.5c-2.1,0.5-4.8,1.3-5.6,1.6c-3.1,2.9-16.4,18.5-26.4,36
										C415.4,206.6,423.5,178.1,424.8,173.5z"/>
								</g>
							</g>
						</g>
						<g>
							<g>
								<path class="st0" d="M82.9,358.5c1.3-1,2.7-1.9,4.4-2.5c1.7-0.7,3.8-1.3,6.4-1.8c22.3-4.2,38.7-7.8,49.2-10.8
									c2.1-0.4,3.4-0.7,3.8-0.8c0.5-0.1,1.8-0.3,4-0.6c2.2-0.3,3.5-0.4,4-0.4c2.5-0.4,3.8-0.2,3.9,0.6c0,0.1-0.5,0.3-1.5,0.7
									c-1,0.4-1.9,0.7-2.6,0.8c-0.5,0.1-3.4,0.7-8.7,1.9c-5.3,1.2-8.8,1.9-10.6,2.4c-1.8,0.4-4.4,1.1-8.1,2c-3.6,0.9-6.9,1.9-9.7,2.8
									c-0.6,0.2-1.2,0.4-1.8,0.8c-0.6,0.3-1.4,0.7-2.2,1.1c-0.8,0.4-1.4,0.7-1.7,0.8c0.3,0.2,0.6,0.3,1,0.3c0.4,0.1,0.7,0.1,1.1,0.1
									c0.3,0,0.7-0.1,1.1-0.2c0.4-0.1,0.8-0.2,1.1-0.2c0.3-0.1,0.7-0.2,1.1-0.3c0.4-0.1,0.8-0.2,1-0.3c4.3-0.9,9.2-2.1,14.8-3.3
									c5.6-1.3,10.7-2.4,15.3-3.5c4.6-1,9.5-2.1,14.5-3.2c5-1.1,10.1-2.3,15.2-3.4c5.1-1.1,10-2.2,14.8-3.1c6.5-1.3,13.1-2.6,19.8-3.9
									c6.7-1.3,15-2.8,24.9-4.5c9.9-1.8,16.5-3,19.9-3.6c8.9-1.6,15.9-3.9,20.9-6.9c2.4-1.4,5-2.7,7.8-3.7c2.8-1.1,5.4-1.8,7.6-2.4
									c2.2-0.5,5.1-1.1,8.5-1.7c11.5-2.3,24.1-4.5,37.8-6.8c13.7-2.3,25.8-4.2,36.2-5.8c10.4-1.6,23.2-3.6,38.4-5.9
									c15.2-2.3,27.5-4.2,36.9-5.7c0.1,0,0.9-0.2,2.4-0.4c1.5-0.3,2.5-0.4,3-0.4c0.5,0,1.2,0,2.2,0s1.7,0.2,2.3,0.4
									c3.4,1.6,5.7,3.8,7.1,6.6s1.8,5.5,1.5,8.2c0.2,4.6-3.9,8.5-12.1,11.7c-10.4,3.9-22.1,6.5-35.2,7.7c-47,4.2-93.9,10.7-140.5,19.5
									c-54,10.1-110.7,22.2-170.2,36.3c-12.7,3.2-19.5,4.8-20.3,5c-6.7,1.5-11.8,1.3-15.5-0.6c-3.6-1.9-4.5-4.8-2.7-8.9
									c0.4-1,1.1-2.1,1.9-3.3c0.8-1.2,1.7-2.5,2.5-3.7c0.8-1.2,1.5-2.3,2.1-3.3C80.6,360.8,81.6,359.6,82.9,358.5z"/>
							</g>
						</g>
					</g>
					</svg>
                    </a>
                </div>
            </div>
            <div class="pintper-col-14">
                <div class="pintper-iniciar-sesion-container" >
                    <!-- Formulario para enviar la busqueda -->
                    <form action="<?php echo constant('URL')?>local/buscarLocales" method="POST" class="form-busqueda">
                        <input type="text" name="busqueda" placeholder="Buscar local" class="pintper-txt-busqueda" id="txt-busqueda">
                        <input type="submit" value="" class="pintper-btn-buscar" onclick="return validarBusqueda();">
                    </form>
                </div>
            </div>
            <div class="pintper-col-1" x-data="{ open: false }">

                <!-- <img src="../public/img/customer.png" alt="Iniciar Sesion" class="pintper-menu" @click="open = true" style="top: 6px;"> -->

                <div class="usuario-menu">
                    <svg version="1.1" baseProfile="basic" id="user-icon" @click="open = true"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        xml:space="preserve">
                    <path id="user-icon-1" d="M96.2,351.9c-20.7,20.7-37,44.9-48.4,71.8C36,451.6,30,481.2,30,511.7h38.1c0-103.8,84.1-187.9,187.9-187.9
                        s187.9,84.1,187.9,187.9H482c0-30.5-6-60.1-17.8-88c-11.4-26.9-27.7-51.1-48.4-71.8c-20.7-20.7-44.9-37-71.8-48.4
                        c-3-1.3-6-2.5-9.1-3.6c12.6-7.1,24.1-15.9,34.5-26.2c14.7-14.7,26.3-31.9,34.3-51c8.4-19.8,12.6-40.8,12.6-62.4s-4.2-42.6-12.6-62.4
                        c-8.1-19.1-19.6-36.2-34.3-51c-14.7-14.7-31.9-26.3-51-34.3C298.6,4.2,277.6,0,256,0s-42.6,4.2-62.4,12.6
                        c-19.1,8.1-36.2,19.6-51,34.3c-14.7,14.7-26.3,31.9-34.3,51c-8.4,19.8-12.6,40.8-12.6,62.4s4.2,42.6,12.6,62.4
                        c8.1,19.1,19.6,36.2,34.3,51c10.3,10.3,21.9,19.1,34.5,26.2c-3,1.1-6.1,2.3-9.1,3.6C141.1,314.9,116.9,331.2,96.2,351.9z
                        M133.7,160.3c0-67.5,54.7-122.3,122.3-122.3s122.3,54.7,122.3,122.3S323.5,282.6,256,282.6S133.7,227.8,133.7,160.3z"/>
                    </svg>
                </div>
                

                <div class="menu-pintper-nav"  x-show="open" @click.away="open = false">
                    <ul>
                        <li><a href="<?php echo constant('URL')?>local/verLocales">Ver Locales</a></li>
                        <li><a href="#Promociones">Promociones</a></li>
                        <li><a href="<?php echo constant('URL')?>usuario/config">Configuraciones</a></li>
                        <li><a href="<?php echo constant('URL')?>Usuario">Cerrar Sesion</a></li>
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
                    <div class="mapa" id="mapa"></div>
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

    <!--<script src="<?php echo constant("URL")?>public/js/navScript.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCfIMAGCSKeLJPoUwDPnGz7pB4-exX76Dk"></script>
    

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