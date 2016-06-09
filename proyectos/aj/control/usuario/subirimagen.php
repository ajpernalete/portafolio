<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Commerce Example</title>
	<link rel="shortcut icon" href="../../img/favicon.jpg"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<link href="../../css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../../css/estilos.css" rel="stylesheet" media="screen">

</head>
<body>
	<?php include("../conect.php"); 
	$id=$_GET['id'];

	$wsql="SELECT nombre as np from producto where idproducto='$id'";
	$result=mysql_query($wsql,$link);
	$row=mysql_fetch_array($result);
	$np=$row['np'];
	?>
<form  action="guardarimagen.php"  method="post">
	<div class="panel panel-primary">
		<div class="panel-heading text-center"><h4><?php echo $np ?></h4></div>
		<div class="panel-body">
			<div class="form-group">
				<label for="foto1">Foto1</label>
				<input type="file" class="form-control" name="fotod<?php echo $id ?>1" id="foto1">
			</div>
			<div class="form-group">
				<label for="foto2">Foto2</label>
				<input type="file" class="form-control" name="fotod<?php echo $id ?>2" id="foto2">
			</div>
			<div class="form-group">
				<label for="foto3">Foto3</label>
				<input type="file" class="form-control" name="fotod<?php echo $id ?>3" id="foto3">
			</div>
			<div class="form-group">
				<label for="foto4">Foto4</label>
				<input type="file" class="form-control" name="fotod<?php echo $id ?>4" id="foto4">
			</div>
		</div>
		<div class="panel-footer text-center">
			<button type="submit" class="btn btn-primary">Guardar</button>
			<button type="reset" class="btn btn-danger">Borrar</button>
		</div>
	</div>
</form>
</body>
</html>