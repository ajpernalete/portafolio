<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=" " />
    <meta name="description" content=" ">
    <meta name="author" content=" ">

	<title>Proyect</title>

	<link rel="shortcut icon" href="img/logocarrito.png"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/estilos.css" rel="stylesheet" media="screen">

	<script src="control/select.js"></script>
	<script src="js/main.js"></script>
</head>
<body>

	<div class="container-fluid">
	<div class="row">
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background:;">
		<div class="col-md-11 col-md-offset-1">

		  <div class="container-fluid">
		  <div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand"><img src="img/logocarrito.png" class="img-responsive center-block" width="70" /></a>
		    </div>
		    <div>
		      <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav">
		          <li><a href="index.php">Home</a></li>
	              <li><a href="#">Servicios</a></li>
	              <li><a href="#">Politicas</a></li>
	              <li><a href="#pie">Contacto</a></li>
	              <li><a href="cotizaroffline.html">Cotizar</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right">
			      <li class="active"><a href="registrarse.php"><span class="glyphicon glyphicon-user"></span> Registrase</a></li>
			      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			    </ul>
		      </div>
		    </div>
		  </div>

		</div>
	</nav>  
	</div>
	</nav>  

		<?php if(isset($_SESSION['mensaje'])){ ?>
		<div class="row" style="margin-top:45px;">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php echo $_SESSION['mensaje']?>
			</div>
		</div>
		<?php unset($_SESSION['mensaje']); } ?>

		<div class="container">
			
			<div class="row" style="margin-top:45px;">
					
			    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 text-center">

				<form  action="control/usuario/insertarcliente.php"  method="post">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="panel-title text-center"><h4>REGISTRARSE</h4></div>
									</div>
									<div class="panel-body modal-body">
										<div class="form-group">
											<label for="nombre">Nombre</label>
											<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduce tu nombre" required>
										</div>
										<div class="form-group">
											<label for="apellido">Apellido</label>
											<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Introduce tu apellido" required>
										</div>
										<div class="form-group">
											<label for="sexo">Sexo</label>
											<select name="sexo" class="form-control" id="sel1">
												<?php include("control/sexoselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<div class="form-group">
												<?php include("control/select.php");; ?>
											</div>
											<div class="form-group">
												<label for="estados">Estado</label>
												<select disabled="disabled" name="estados" class="form-control" id="estados">
													<option value="0">Selecciona opción...</option>
												</select>
											</div>
											<div class="form-group">
												<label for="ciudades">Ciudad</label>
												<select disabled="disabled" name="ciudades" class="form-control" id="ciudades">
													<option value="0">Selecciona opción...</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="correo">Correo</label>
											<input type="email" class="form-control" name="correo" id="correo" placeholder="Introduce tu correo: ejemplo@dominio.com" required>
										</div>
										<div class="form-group">
											<label for="clave">Contraseña</label>
											<input type="password" class="form-control" name="clave" id="clave" placeholder="Contraseña" required>
										</div>
										<div class="form-group">
											<label for="clave1">Confirme su Contraseña</label>
											<input type="password" class="form-control" name="clave1" id="clave1" placeholder="Confirme su Contraseña" required>
											<div class="alert alert-danger alert-dismissible hidden" role="alert">
												<button type="button" class="close" data-dismiss="alert">
												<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
												</button>
												<strong>Error!</strong> Las claves no coinciden"
											</div>
										</div>
										<div class="form-group">
											<label for="cedula">Teléfono de Casa</label>
											<input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Introduce tu teléfono de casa">
										</div>
										<div class="form-group">
											<label for="celular">Celular</label>
											<input type="tel" class="form-control" name="culular" id="celular" placeholder="Introduce tu teléfono celular" required>
										</div>
										<div class="form-group">
											<label for="direccion">Direccion de redes sociales</label>
											<textarea class="form-control" rows="4" name="direccion" id="direccion" placeholder="Introduce tu direccion de red social"></textarea> 
										</div>
									</div>
									<div class="panel-footer text-center"> 
										<button type="submit" class="btn btn-primary">Enviar</button>
										<button type="reset" class="btn btn-danger">Borrar</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Salir</button> 
									</div> 
								</div>
							</form>

				</div>
			</div>
		</div>

		<!-- FOOTER -->
		<div class="footer" id="pie" style="background:#222; margin-top: 30px;">
			<div class="container">
				<div class="row">
					
			      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
			        <h3>Redes Sociales:</h3>
					<a href="#"><img src="img/logoinsta.png" width="50" alt="instagram" style="margin:20px;"></a>
			      	<a href="#"><img src="img/logotwitter.png" width="50" alt="twitter" style="margin:20px;"></a>
			      	<a href="#"><img src="img/logogmail.png" width="50" alt="twitter" style="margin:20px;"></a>
			      </div>

				</div>

		
			</div><!-- container -->
		</div><!-- fin Footer -->

</body>
</html>