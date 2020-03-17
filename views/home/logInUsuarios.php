<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/pintperRoot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/pintperGrid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/headerPintper.css">
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/indexStyle.css">
	<link rel="icon" href="<?php echo constant('URL')?>public/img/Favicon2.png">
	<title>Pintper</title>
</head>
<body>
	<header class="pintper-container-nav">
		<div class="pintper-row">
			<div class="pintper-col-1">
				<div class="pintper-logo-container">
					<a href="<?php echo constant('URL')?>"><img src="<?php echo constant("URL")?>public/img/PintperWordWhite.png" alt="Pintper Logo"></a>
				</div>
			</div>
			<div class="pintper-col-15">
				<div class="pintper-iniciar-sesion-container">
					<a href="#"><img src="<?php echo constant("URL")?>public/img/customer.png" alt="Iniciar Sesion"></a>
				</div>
			</div>
		</div>
	</header>


	<h2>Index Pintper</h2>
		
	<h2>Ingresar como usuario comun</h2>
		<a href="<?php echo constant('URL')?>Usuario">acá</a>
	<hr>

	<h2>Ingresar como Administrador</h2>
		<a href="<?php echo constant('URL')?>Administrador">acá</a>
	<hr>

	<h2>Ingresar como dueño de local</h2>
		<a href="<?php echo constant('URL')?>Propietario">acá</a>
	<hr> 
	
	<script type="" src="<?php echo constant('URL')?>public/js/jquery-3.4.1.js"></script>
	<script type="" src="<?php echo constant('URL')?>public/js/bootstrap.min.js"></script>
</body>
</html>