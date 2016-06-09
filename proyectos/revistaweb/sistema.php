<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Revista Web</title>
	<link rel="shortcut icon" href="img/favicon.png"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/estilos.css" rel="stylesheet" media="screen">

</head>
<body class="bd_sis">
	<div class="container">
		<div class="row">
			<div class="col-md-4 nomargin nopadding block-center" id="logo">
				<img src="img/logo2.png" class="img-responsive block.left" alt="Logo Vzla Box Fitness">
			</div>
			<div class="col-md-8 hidden-xs hidden-sm nomargin nopadding" id="banner">
				<img src="img/banner.jpg" class="img-responsive">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 nopadding text-center">
				<?php 
				$tipous=$_SESSION['tipous'];
				if($tipous==1)include('control/menu/menuad.html');
				if($tipous==2)include('control/menu/menuop.html');
				if($tipous==3)include('control/menu/menuus.html');
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
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center nopadding footer_sis">
				<h4>Pie de Pagina</h4>
			</div>
		</div>
	</div>
</body>
</html>