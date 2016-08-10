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

		<?php if(isset($_SESSION['bienvenida'])){ ?>
		<div class="row" style="margin-top:50px;">
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php echo $_SESSION['bienvenida']?>
			</div>
		</div>
		<?php unset($_SESSION['bienvenida']); } ?>

		<?php if(isset($_SESSION['mensaje'])){ ?>
		<div class="row" style="margin-top:50px;">
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<?php echo $_SESSION['mensaje']?>
			</div>
		</div>
		<?php unset($_SESSION['mensaje']); } ?>


		<div class="container">
			
			<div class="row" style="margin-top:45px;">
					
			    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center">

				<div id="carruselpro" class="carousel slide" data-ride="carousel"> 
			       	<ol class=" carousel-indicators"> 
			           	<li data-target="#carruselpro" data-slide-to="0" class="active"></li> 
			            <li data-target="#carruselpro" data-slide-to="1"></li> 
			            <li data-target="#carruselpro" data-slide-to="2"></li>
			            <li data-target="#carruselpro" data-slide-to="3"></li> 
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
			  		<a class="left carousel-control" href="#carruselpro" role="button" data-slide="prev">
			    		<span class="glyphicon glyphicon-chevron-left"></span>
			  		</a>
			  		<a class="right carousel-control" href="#carruselpro" role="button" data-slide="next">
			    		<span class="glyphicon glyphicon-chevron-right"></span>
			  		</a>

				</div>

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