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

	<?php include("librerias/modal-emergente-datatable.html") ?>
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
								$idcategoria="";
								$idmarca="";
								$idestadodeproducto="";
								$nombre="";
								$cantidad="";
								$precio="";
								$descripcion="";
								$accion="control/usuario/insertarproducto.php";
								$id="";

								if(isset($_GET['id'])){
									$id=$_GET['id'];
									$wsql="select * from producto
									where idproducto = '$id'";
									$result=mysql_query($wsql,$link);
									$row= mysql_fetch_array($result);
									
									$idcategoria=$row['idcategoria'];
									$idmarca=$row['idmarca'];
									$idestadodeproducto=$row['idestadodeproducto'];
									$nombre=$row['nombre'];
									$cantidad=$row['cantidad'];
									$precio=$row['precio'];
									$descripcion=$row['descripcion'];
									$accion="control/usuario/modificarproducto.php";

								}

							?>


							<form  action="<?php echo $accion ?>"  method="post">
							<input type="hidden" name="id" value="<?php echo $id ?>">
								<div class="panel panel-primary text-center">
									<div class="panel-heading">
										<div class="panel-title text-center"><h4>PRODUCTO</h4></div>
									</div>
									<div class="panel-body modal-body">
										<div class="form-group">
											<label for="categoria">Categoria del producto</label>
											<select name="categoria" class="form-control" id="sel1" required>
												<?php include("control/categoriaselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="marca">Marca del Producto</label>
											<select name="marca" class="form-control" id="sel1" required>
												<?php include("control/marcaselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="estadoproducto">Estado del Producto</label>
											<select name="estadoproducto" class="form-control" id="sel1" required>
												<?php include("control/estadoproductoselect.php"); ?>
											</select>
										</div>
										<div class="form-group">
											<label for="nombre">Nombre de la Publicacion</label>
											<input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>" id="nombre" placeholder="Titulo de la pùblicacion" required>
										</div>
										<div class="form-group">
											<label for="cantidad">Cantidad Disponible del Porducto</label>
											<input type="number" class="form-control" name="cantidad" value="<?php echo $cantidad ?>" id="cantidad" required>
										</div>
										<div class="form-group">
											<label for="precio">Precio del Producto</label>
											<input type="number" class="form-control" name="precio" value="<?php echo $precio ?>" id="precio" required>
										</div>
										<div class="form-group">
											<label for="descripcion">Descripcion de la Publicacion</label>
											<textarea class="form-control" rows="5" name="descripcion" id="descripcion" placeholder="Descripcion de la publicacion" required><?php echo $descripcion ?></textarea> 
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
		<div class="row well well-sm">
			<h3 class="text-center">Listado de Productos</h3>
		</div>
		<div class="row">
			<div class="table-responsive">

				<table class="table table-striped table-bordered table-hover" id="example">
					<thead>
						<tr>
							<th>Foto</th>
							<th>Categorias</th>
							<th>Marcas</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>

					<?php 
					//Leer tabla producto
					include("control/conect.php");
					$wsql="SELECT *, producto.nombre as np, categorias.nombre as nc, marcas.nombre as nm 
					from producto 
					inner join categorias on producto.idcategoria=categorias.idcategoria
					inner join marcas on producto.idmarca=marcas.idmarca
					order by idproducto desc";
					$result=mysql_query($wsql,$link);
					echo mysql_error($link);
					while ($row=mysql_fetch_array($result)){ 
						$id=$row['idproducto'];
						$np=$row['np'];

					?>

						<tr>
							<td><img src="imgpro/foto<?php echo $row['idproducto'] ?>.png" style="width:80px;height:80px" class="img-responsive center-block"></td>
							<td><?php echo $row['nc'] ?></td>
							<td><?php echo $row['nm'] ?></td>
							<td><?php echo $row['np'] ?></td>
							<td>P= <?php echo number_format($row['precio'],2,',','.') ?>.</td>
							<td>C= <?php echo number_format($row['cantidad'],0,',','.') ?>.</td>
							<td>
							  <div class="btn-group">
							    <button type="button" class="btn btn-default dropdown-toggle"
							            data-toggle="dropdown">
							      Acciones
							      <span class="caret"></span>
							    </button>
							    <ul class="dropdown-menu">
							      <li><a href="producto.php?pag=pro&id=<?php echo $id ?>">Modificar</a></li>
							      <li><a href="control/usuario/pausarproducto.php?id=<?php echo $id ?>">Pausar</a></li>
							      <li><a href="control/usuario/activarproducto.php?id=<?php echo $id ?>">Activar</a></li>
							      <li><a class="fancybox fancybox.iframe" href="control/usuario/subirimagen.php?id=<?php echo $id ?>">Subir Imagen</a></li>
							      <div class="divider"></div>
							      	<a href="control/usuario/eliminarproducto.php?id=<?php echo $id ?>" class="eliminar_dato" title="<?php echo 'Seguro que desea eliminar este registro:<br><h4><center>'.$np.'</h4><center>' ?>"><button type="button" class="btn btn-danger btn-xs">Eliminar</button></a>
							    </ul>
							  </div>
							</td>
						</tr>

					<?php 

					}

					?>

					</tbody>
				</table>
    		</div>
		</div>
		<div class="row">
			<div class="col-md-12 footer">
				Creado por Ing. AJ Pernalete Contacto: ajpernaletel@gmail.com
			</div>
		</div>
	</div>
</body>
</html>