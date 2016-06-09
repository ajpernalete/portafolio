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
		<?php if(isset($_SESSION['mensaje'])){ ?>
		<div class="row">
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php echo $_SESSION['mensaje']?>
			</div>
		</div>
		<?php unset($_SESSION['mensaje']); } ?>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

							<?php 
								include("control/conect.php");
								
								$nombre="";
								
									$accion="control/filiacion/insertarfiliacion.php";
									$idfiliacion="";
									$nombre="";

								if(isset($_GET['id'])){
									$idfiliacion=$_GET['id'];
									$wsql="select * from filiacion
									where idfiliacion = '$idfiliacion'";
									$result=mysql_query($wsql,$link);
									$row= mysql_fetch_array($result);
									
									$nombre=$row['nombre'];
									$accion="control/filiacion/modificarfiliacion.php";

								}

							?>

							<form  action="<?php echo $accion ?>"  method="post">
							<input type="hidden" name="id" value="<?php echo $idfiliacion ?>">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<div class="panel-title text-center"><h4>FILIACION</h4></div>
									</div>
									<div class="panel-body modal-body">
										<div class="form-group">
											<label for="nombre">Nombre</label>
											<input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>" id="nombre" placeholder="Nombre" required>
										</div>
									</div>
									<div class="panel-footer text-center"> 
										<button type="submit" class="btn btn-primary">Guardar</button>
										<button type="reset" class="btn btn-danger">Borrar</button>
									</div> 
								</div>
							</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<div class="table-responsive">
				<table class="table">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Estatus</th>
				        <th>Nombre</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php include('control/filiacion/tablafiliacion.php') ?>
				    </tbody>
				  </table>
			</div>
			</div>
		</div>
	<footer>
	</footer>
	</div>
</body>
</html>