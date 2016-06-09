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

									$accion="control/usuario/insertarusuarios.php";
									$idusuario="";
									$nombre="";
									$apellido="";
									$telefonos="";
									$estatus="";
									$tipodeusuarios="";
									$clave="";

								if(isset($_GET['id'])){
									$idusuario=$_GET['id'];
									$wsql="select * from usuarios
									where idusuario = '$idusuario'";
									$result=mysql_query($wsql,$link);
									$row= mysql_fetch_array($result);
									
									$nombre=$row['nombre'];
									$apellido=$row['apellido'];
									$estatus=$row['idestatus'];
									$clave=$row['clave'];
									$tipodeusuarios=$row['idtipodeusuario'];
									$telefonos=$row['telefonos'];
									$accion="control/usuario/modificarusuarios.php";

								}

							?>

							<form  action="<?php echo $accion ?>"  method="post">
							<input type="hidden" name="id" value="<?php echo $idusuario ?>">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<div class="panel-title text-center"><h4>USUARIOS</h4></div>
									</div>
									<div class="panel-body modal-body">
										<div class="form-group">
											<label for="estatus">Estatus</label>
											<select name="estatus" class="form-control" id="sel1" required>
												<?php include("control/estatusselect.php"); ?>
											</select>
										</div>

										<div class="form-group">
											<label for="tipodeusuario">Tipo de Usuario</label>
											<select name="tipodeusuario" class="form-control" id="sel1" required>
												<?php include("control/tipodeusuarioselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="nombre">Nombres</label>
											<input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>" id="nombre" placeholder="Nombres" required>
										</div>
										<div class="form-group">
											<label for="apellido">Apellidos</label>
											<input type="text" class="form-control" name="apellido" value="<?php echo $apellido ?>" id="apellido" placeholder="Apellidos" required>
										</div>
										<div class="form-group">
											<label for="clave">Clave</label>
											<input type="text" class="form-control" name="clave" value="<?php echo $clave ?>" id="clave" placeholder="Clave">
										</div>
										<div class="form-group">
											<label for="telefonos">Telefonos</label>
											<input type="text" class="form-control" name="telefonos" value="<?php echo $telefonos ?>" id="telefonos" placeholder="Telefonos">
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
			<div class="col-md-12">
			<div class="table-responsive">
				<table class="table">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Id Estatus</th>
				        <th>Id Tipo de Usuario</th>
				        <th>Nombre</th>
				        <th>Apellido</th>
				        <th>Clave</th>
				        <th>Telefonos</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php include('control/usuario/tablausuarios.php') ?>
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