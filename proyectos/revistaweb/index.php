<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Revista Web</title>
	<link rel="shortcut icon" href="img/favicon.png"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/estilos.css" rel="stylesheet" media="screen">

</head>
<body>
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
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
							<a class="navbar-brand" href="#">Vzla Box Fitness</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Inicio</a></li>
								<li><a href="#">Crossfit</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
									<ul class="dropdown-menu">
									<?php include("control/principal/vercategorias.php"); ?>
									</ul>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Comunidades<span class="caret"></span></a>
									<ul class="dropdown-menu">
									<li><a href="#">Atletico Pro Box</a></li>
									<li><a href="#">EPP Caracas</a></li>
									</ul>
								</li>
								<li><a href="#">Contacto</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								 <form class="navbar-form navbar-left" role="search" action="index.php" method="post">
					   		   	   <div class="form-group">
					    		    <input type="text" class="form-control" placeholder="Buscar" name="buscar">
					    		   </div>
					    		  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
					    		</form>
        						<li><a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        						<div class="modal fade" id="myModal"> 
							        <div class="modal-dialog "> 
										<?php include("control/session/login.php"); ?>
							        </div>
							 	</div>
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
			<?php if (!isset($_GET['idp'])) { ?>
			<div class="col-md-9 text-center">
				<div class="row">
					<div class="col-md-12">
					<?php include("control/principal/publicacionslider.php"); ?>
                    </div>
                    <div class="row nomargin">
                    	<div class="col-xs-2 redes">
                    		<h4>Redes: </h4>
                    	</div>
                    	<div class="col-xs-10 redes">
                    		<marquee scrollamount="6" scrolldelay="10" direction="left" onMouseOver="this.stop()" onMouseOut="this.start()" loop="true">
                    		<h4>Prueba en las Redes 3</h4>
                        	</marquee>
                    	</div>
                    </div>

                    <div class="col-md-9 text-center nopadding">
						<?php include("control/principal/publicacion.php"); ?>
					</div>

					<div class="col-md-3 text-center" style="height:500px;">
						<div class="row">
							<div class="col-md-12 hidden-xs hidden-sm well well-sm text-center" style="height:100px;margin-top:15px;">
								<h4>Calendario</h4>
							</div>
							<div class="col-md-12 hidden-xs hidden-sm well well-sm text-center" style="height:200px;">
								<h4>Filtros</h4>
							</div>
							<div class="col-md-12 hidden-xs hidden-sm well well-sm text-center" style="height:200px;">
								<h4>Filtros</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } else {?>
				     <?php include("control/principal/verdetalle.php"); ?>
			<?php } ?>
			<div class="col-md-3 hidden-xs hidden-sm well well-sm text-center" style="height:800px;">
				<h4>Publicidad Tipo 2</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 hidden-xs hidden-sm nopadding">
				<?php include("control/principal/minicarrusel.php"); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center nopadding footer">
				<h4>Pie de Pagina</h4>
			</div>
		</div>
	</div>
</body>
</html>

