<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html;" charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Revista Web</title>
	<link rel="shortcut icon" href="img/favicon.png"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/estilos.css" rel="stylesheet" media="screen">

	<script> <!-- permite mostrar o esconder los datos del conductor -->
	function pagoOnChange(sel) {
	 var porId=document.getElementById("mismo").checked;
	     //alert(porId); 
		  if (porId){
	           divC = document.getElementById("nCuenta");
	           divC.style.display = "";
	      }else{
	           divC = document.getElementById("nCuenta");
	           divC.style.display="none";
	      }
	}
	</script>

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
		<?php if(isset($_SESSION['mensaje'])){ ?>
		<div class="row">
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php echo $_SESSION['mensaje']?>
			</div>
		</div>
		<?php unset($_SESSION['mensaje']); } ?>
		<div class="row">
			<div class="col-md-12">
				<h4><input type="checkbox" id="mismo" onChange="pagoOnChange(this)"> Agregar una Publicacion</h4>
							<?php
								include("control/conect.php");
								$idcategoria="";
								$idsubcategoria="";
								$titulo="";
								$subtitulo="";
								$descripcion="";
								$accion="control/publicaciones/insertarpublicacion.php";
								$id="";
								$mostrar="display:none;";

								if(isset($_GET['id'])){

									$id=$_GET['id'];
									$wsql="select * from publicaciones
									where idpublicacion = '$id'";
									$result=mysql_query($wsql,$link);
									$row= mysql_fetch_array($result);
									
									$idcategoria=$row['idcategoria'];
									$idsubcategoria=$row['idsubcategoria'];
									$titulo=$row['titulo'];
									$subtitulo=$row['subtitulo'];
									$descripcion=$row['descripcion'];
									$accion="control/publicaciones/modificarpublicacion.php";
									$mostrar="";

								}?>				

				<div  id="nCuenta" style="<?php echo $mostrar ?>">
				<div class="col-md-8 col-md-offset-2">
							
					<form  action="<?php echo $accion ?>"  method="post" id="mismo">
							<input type="hidden" name="id" value="<?php echo $id ?>">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<div class="panel-title text-center"><h4>PUBLICACION</h4></div>
									</div>
									<div class="panel-body modal-body">
										<div class="form-group">
											<label for="categoria">Categoria del producto</label>
											<select name="categoria" class="form-control" id="sel1" required>
												<?php include("control/categoriaselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="subcategoria">Subcategoria del Producto</label>
											<select name="subcategoria" class="form-control" id="sel1" required>
												<?php include("control/subcategoriaselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="titulo">Titulo de la Publicacion</label>
											<input type="text" class="form-control" name="titulo" value="<?php echo $titulo ?>" id="titulo" placeholder="Titulo de la pùblicacion" required>
										</div>
										<div class="form-group">
											<label for="subtitulo">Subtitulo de la Publicacion</label>
											<input type="text" class="form-control" name="subtitulo" value="<?php echo $subtitulo ?>" id="subtitulo" placeholder="Subtitulo de la pùblicacion" required>
										</div>
										<div class="form-group">
											<label for="descripcion">Descripcion de la Publicacion</label>
											<textarea class="form-control" rows="15" name="descripcion" id="descripcion" placeholder="Descripcion de la publicacion" required><?php echo $descripcion ?></textarea> 
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
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table">
				    <thead>
				      <tr>
				        <th>Foto</th>
				        <th>Autor</th>
				        <th>Categoria</th>
				        <th>Subcategoria</th>
				        <th>Titulo</th>
				        <th>Subtitulo</th>
				        <th>Descripcion</th>
				        <th>Acciones</th>
				      </tr>
				    </thead>
				    <tbody>
				      <?php include('control/publicaciones/tablapublicaciones.php'); ?>
				    </tbody>
				  </table>
				  </div>
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