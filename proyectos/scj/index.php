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
	
		<?php if(isset($_SESSION['mensaje'])){ ?>
		<div class="row">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php echo $_SESSION['mensaje']?>
			</div>
		</div>
		<?php unset($_SESSION['mensaje']); } ?>
		<div class="row" style="margin-bottom: 50px; margin-top: 50px;">
			<div class="col-sm-12 col-md-12">
			<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
				<form class="form-horizontal" role="form" action="control/session/validar.php" method="post">
					<div class="form-group">
				  	<label class="col-lg-2 control-label">Usuario</label>
				  	<div class="col-lg-10">
				    	<input type="text" name="nombre" class="form-control" id="ejemplo_email_3" placeholder="Usuario" required>
				  	</div>
					</div>
					<div class="form-group">
				  	<label  class="col-lg-2 control-label" >Contraseña</label>
				  	<div class="col-lg-10">
				    	<input type="password" name="clave" class="form-control" id="ejemplo_password_3" placeholder="Contraseña" required>
				 	</div>
					</div>
					<div class="form-group">
				  	<div class="col-lg-offset-2 col-lg-10">
				    	<button type="submit" class="btn btn-default" >Entrar</button>
				  	</div>

				  	</div>
				</form>
			</div>
			</div>
		</div>
	

	<footer>
		
	</footer>
</div>
</body>
</html>