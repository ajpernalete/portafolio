<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Commerce Example</title>
	<link rel="shortcut icon" href="img/favicon.jpg"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/estilos.css" rel="stylesheet" media="screen">

	<!--GALERIA DE IMAGENES -->
	
	<!--GALERIA DE IMAGENES -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 text-center">
				<img src="img/logo.png">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center nopadding">
				<?php 
				$tipo=$_SESSION['tipo'];
				if($tipo==1)include('control/menuad.html');
				if($tipo==2)include('control/menuop.html');
				if($tipo==3)include('control/menuus.html');
				?>
			</div>
		</div>
		<?php if(isset($_SESSION['bienvenida'])){ ?>
		<div class="row">
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php echo $_SESSION['bienvenida']?>
			</div>
		</div>
		<?php unset($_SESSION['bienvenida']); } ?>
		<div class="row">
			<div class="col-md-12 footer">
				Creado por Ing. AJ Pernalete Contacto: ajpernaletel@gmail.com
			</div>
		</div>
	</div>
</body>
</html>