<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="public/css/indexStyle.css">
	<link rel="icon" href="public/img/Favicon2.png">
	<title>Pintper</title>
</head>
<body>
	<header class="pintper-container-nav">
		<div class="pintper-row">
			<div class="pintper-col-1">
				<div class="pintper-logo-container">
					<a href="<?php echo constant('URL')?>home"><img src="<?php echo constant("URL")?>public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
				</div>
			</div>
			<div class="pintper-col-15">
				<div class="pintper-iniciar-sesion-container">
					<a href="<?php echo constant('URL')?>home/renderLogins"><img src="<?php echo constant("URL")?>public/img/customer.png" alt="Iniciar Sesion"></a>
				</div>
			</div>
		</div>
	</header>

	<div class="contenedor-index">

		<h1>Bienvenido</h1>

		<img src="public/img/PintperLogo.png" alt="Logo Pintper"> <br>

		<button class="pintper-button-op2"><a href="">Conocer más</a></button>

	</div>
	
	

	<!-- <?php //include('footer.php'); ?> -->
	<script type="" src="public/js/jquery-3.4.1.js"></script>
	<script type="" src="public/js/bootstrap.min.js"></script>
</body>
</html>