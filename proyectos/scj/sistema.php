<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Despacho Parroquial Virtual</title>
	<link rel="shortcut icon" href="img/favicon.jpg"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/estilos.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="container">
	<header>
		<div class="row">
				<div class="col-md-3 col-sm-3">
				<center><img src="img/cruz.png" style="height: 200px; margin-top: 15px;" class="img-responsive"></center>
				</div>
				<div class="col-md-6 col-sm-6">
				<center><img src="img/titulo.png" class="img-responsive"></center>
				</div>
				<div class="col-md-3 col-sm-3">
				<center><img src="img/jesus.png" style="height: 200px; margin-top: 15px;" class="img-responsive"></center>
				</div>
		</div>
	</header>
		<div class="row">
			<div class="col-md-12 nopadding text-center">
				<?php 
				$tipo=$_SESSION['tipous'];
				if($tipo==1)include('control/menu/menuad.html');
				if($tipo==2)include('control/menu/menuop.html');
				if($tipo==3)include('control/menu/menuus.html');
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
	<footer>
	</footer>
	</div>
</body>
</html>