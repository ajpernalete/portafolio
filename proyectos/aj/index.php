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

	<!--GALERIA DE IMAGENES -->
	
	<!--GALERIA DE IMAGENES -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-4 text-center">
				<img src="img/logo.png">
			</div>
			<div class="col-sm-7 col-md-7 col-md-offset-1 col-sm-offset-1 text-center padding">
				<form class="form-horizontal" role="form" action="control/validar.php" method="post">
					<div class="form-group">
				  	<label for="ejemplo_email_3" class="col-lg-2 control-label">Email</label>
				  	<div class="col-lg-10">
				    	<input type="email" name="correo" class="form-control" id="ejemplo_email_3" placeholder="Email" required>
				  	</div>
					</div>
					<div class="form-group">
				  	<label for="ejemplo_password_3" class="col-lg-2 control-label" >Contraseña</label>
				  	<div class="col-lg-10">
				    	<input type="password" name="clave" class="form-control" id="ejemplo_password_3" placeholder="Contraseña" required>
				 	</div>
					</div>
					<div class="form-group">
				  	<div class="col-lg-offset-2 col-lg-10">
				    	<button type="submit" class="btn btn-default" >Entrar</button>
				    	<a data-toggle="modal" href="#myModal" class="btn btn-default">Registrarse</a> 
				  	</div>

				  	</div>
				  	</form>

				  	

				  	<div class="modal fade" id="myModal"> 
				        <div class="modal-dialog "> 
							<?php include("control/registro.php"); ?>
				        </div>
				 	</div>
					
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center nopadding">
				<nav class="navbar navbar-inverse nav">
			      <div class="container-fluid">
			        <div class="navbar-header">
			        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			            	<span class="icon-bar"></span>
			            	<span class="icon-bar"></span>
			            	<span class="icon-bar"></span>                        
			        	</button>
			        </div>
			        <div class="collapse navbar-collapse" id="myNavbar">
			          <ul class="nav navbar-nav">
			            <li class="active"><a href="index.php">HOME</a></li>
			            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">QUIENES SOMOS<span class="caret"></span></a>
			              <ul class="dropdown-menu">
			                <li><a href="#">Mision</a></li>
			                <li><a href="#">Vision</a></li>
			                <li><a href="#">Valores</a></li>
			              </ul>
			            </li>
			            <li><a href="#">COMO COMPRAR</a></li>
			            <li><a href="#">COMO VENDER</a></li>
			            <li><a href="#">CONTACTO</a></li>
			            <form class="navbar-form navbar-left" role="search" action="index.php" method="get">
					      <div class="form-group">
					        <input type="text" class="form-control" placeholder="Buscar" name="buscar">
					      </div>
					      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
					    </form>
			          </ul>
			        </div>
			      </div>
			    </nav>
			</div>
		</div>
		<?php if(isset($_SESSION['mensaje'])){ ?>
		<div class="row">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php echo $_SESSION['mensaje']?>
			</div>
		</div>
		<?php unset($_SESSION['mensaje']); } ?>
		<div class="row">
			<div class="col-md-3 col-sm-3 text-center nopadding nodecoration">
				<div class="panel panel-primary">
					<div class="panel-heading text-left"><b>Ubicacion</b></div>
					<?php include("control/verubicacion.php"); ?>
					<?php if(isset($_GET['vtu'])==2) {?>

					<div class="panel-footer"><a href="index.php">Ver menos</a></div>
					<?php } else { ?>

					<div class="panel-footer"><a href="index.php?vtu=<?php echo 2 ?>">Ver todos</a></div>

					<?php } ?>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading text-left"><b>Categorias</b></div>
					<?php include("control/vercategorias.php"); ?>
					<?php if(isset($_GET['vtc'])==2) {?>

					<div class="panel-footer"><a href="index.php">Ver menos</a></div>
					<?php } else { ?>

					<div class="panel-footer"><a href="index.php?vtc=<?php echo 2 ?>">Ver todos</a></div>

					<?php } ?>

				</div>
				<div class="panel panel-primary">
					<div class="panel-heading text-left"><b>Marcas</b></div>
					<?php include("control/vermarcas.php"); ?>
					<?php if(isset($_GET['vtm'])==2) {?>

					<div class="panel-footer"><a href="index.php">Ver menos</a></div>
					<?php } else { ?>

					<div class="panel-footer"><a href="index.php?vtm=<?php echo 2 ?>">Ver todos</a></div>

					<?php } ?>
				</div>
			</div>
				<div class="col-md-9 col-sm-9  slider">
				<?php if (!isset($_GET['idp'])) { ?>
					<div id="carrusel" class="carousel slide" data-ride="carousel"> 
			       	<ol class=" carousel-indicators"> 
			           	<li data-target="#carrusel" data-slide-to="0" class="active"></li> 
			            <li data-target="#carrusel" data-slide-to="1"></li> 
			            <li data-target="#carrusel" data-slide-to="2"></li>
			            <li data-target="#carrusel" data-slide-to="3"></li> 
			        </ol>
			            <div class="carousel-inner"> 
			                <div class="item active"> 
			                    <img src="img/slider1.jpg" alt=""> 
			                  		<div class="carousel-caption">
			                               
			                       	</div> 
			                </div> 
			                <div class="item">
			                    <img src="img/slider2.jpg" alt=""> 
			                        <div class="carousel-caption">
											
			                       	</div>
			                </div> 
			                <div class="item">
			                    <img src="img/slider3.jpg" alt=""> 
			                        <div class="carousel-caption">
											
			                       	</div>
			                </div>
			                <div class="item"> 
			                    <img src="img/slider4.jpg" alt=""> 
			                  		<div class="carousel-caption">
			                              
			                       	</div> 
			                </div> 
			            </div> 
			 		<!-- Controls -->
			  		<a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
			    		<span class="glyphicon glyphicon-chevron-left"></span>
			  		</a>
			  		<a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
			    		<span class="glyphicon glyphicon-chevron-right"></span>
			  		</a>

				</div>

				<div class="col-md-12 col-sm-12 nopadding">


							<div class="panel panel-primary">
					            <div class="panel-heading">
					                <div class="panel-title text-center"><h4>DESTACADOS</h4></div>
					            </div>
					            <div class="panel-body nopadding">
					            <?php include("control/verproducto.php"); ?>



					            </div>
					            <div class="panel-footer text-center"> 
					            	<?php include("control/paginador.php"); ?>
					            </div> 
					        </div>
				</div>

				<?php } else {?>

				<ol class="breadcrumb">
				  <li><a href="index.php">Inicio</a></li>
				  <li class="active">Detalles</li>
				</ol>

				<div class="panel panel-primary nopadding">
					            <div class="panel-heading">
					                <div class="panel-title text-center"><h4>DETALLE</h4></div>
					            </div>
					            <div class="panel-body nopadding">
					            
										<?php include("control/verdetalles.php"); ?>


					            </div>
					        </div>
				
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 well well-sm text-center">
				Carrusel
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