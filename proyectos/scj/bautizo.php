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

	<?php include("librerias/modal-emergente-datatable.html") ?>
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
								
									$accion="control/bautizo/insertarbautizo.php";
									$idbautizo="";
									$nombre="";
									$apellido="";
									$padres="";
									$padrinos="";
									$fechadenacimiento="";
									$fechadebautizo="";
									$nota="";
									$registrocivil="";
									$telefonos="";
									$sacerdote="";
									$filiacion="";

								if(isset($_GET['id'])){
									$idbautizo=$_GET['id'];
									$wsql="select * from bautizos
									where idbautizo = '$idbautizo'";
									$result=mysql_query($wsql,$link);
									$row= mysql_fetch_array($result);
									
									$nombre=$row['nombre'];
									$apellido=$row['apellido'];
									$padres=$row['padres'];
									$padrinos=$row['padrinos'];
									$fechadenacimiento=$row['fechadenacimiento'];
									$fechadebautizo=$row['fechadebautizo'];
									$nota=$row['nota'];
									$registrocivil=$row['registrocivil'];
									$telefonos=$row['telefonos'];
									$sacerdote=$row['idsacerdote'];
									$filiacion=$row['idfiliacion'];
									$accion="control/bautizo/modificarbautizo.php";

								}

							?>

							<form  action="<?php echo $accion ?>"  method="post">
							<input type="hidden" name="id" value="">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<div class="panel-title text-center"><h4>BAUTIZO</h4></div>
									</div>
									<div class="panel-body modal-body">
										<div class="form-group">
											<label for="idbautizo">ID Bautizo</label>
											<input type="text" class="form-control" name="idbautizo" value="<?php echo $idbautizo ?>" id="idbautizo" placeholder="ID Bautizo" required>
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
											<label for="padres">Padres</label>
											<input type="text" class="form-control" name="padres" value="<?php echo $padres ?>" id="padres" placeholder="Padres" required>
										</div>
										<div class="form-group">
											<label for="padrinos">Padrinos</label>
											<input type="text" class="form-control" name="padrinos" value="<?php echo $padrinos ?>" id="padrinos" placeholder="Padrinos" required>
										</div>
										<div class="form-group">
											<label for="fechadenacimiento">Fecha de Nacimiento</label>
											<input type="text" class="form-control" name="fechadenacimiento" value="<?php echo $fechadenacimiento ?>" id="fechadenacimiento" placeholder="Fecha de Nacimiento año-mes-dia (Ejm: xxxx-xx-xx)" required>
										</div>
										<div class="form-group">
											<label for="fechadebautizo">Fecha de Bautizo</label>
											<input type="text" class="form-control" name="fechadebautizo" value="<?php echo $fechadebautizo ?>" id="fechadebautizo" placeholder="Fecha de Bautizo año-mes-dia (Ejm: xxxx-xx-xx)" required>
										</div>
										<div class="form-group">
											<label for="nota">Nota</label>
											<input type="text" class="form-control" name="nota" value="<?php echo $nota ?>" id="nota" placeholder="Nota">
										</div>
										<div class="form-group">
											<label for="registrocivil">Registro Civil</label>
											<input type="text" class="form-control" name="registrocivil" value="<?php echo $registrocivil ?>" id="registrocivil" placeholder="Registro Civil" required>
										</div>
										<div class="form-group">
											<label for="telefonos">Telefonos</label>
											<input type="text" class="form-control" name="telefonos" value="<?php echo $telefonos ?>" id="telefonos" placeholder="Telefonos">
										</div>
										<div class="form-group">
											<label for="sacerdote">Sacerdote</label>
											<select name="sacerdote" class="form-control" id="sel1" required>
												<?php include("control/sacerdoteselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="filiacion">Filiacion</label>
											<select name="filiacion" class="form-control" id="sel1" required>
												<?php include("control/filiacionselect.php"); ?>
											</select>
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
				<table class="table table-striped table-bordered table-hover" id="example">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Nombre</th>
				        <th>Apellido</th>
				        <th>Padres</th>
				        <th>Padrinos</th>
				        <th>Fecha Nac.</th>
				        <th>Fecha Bau.</th>
				        <th>Nota</th>
				        <th>Sacerdote</th>
				        <th>Registro Civil</th>
				        <th>Accion</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php include('control/bautizo/tablabautizo.php') ?>
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