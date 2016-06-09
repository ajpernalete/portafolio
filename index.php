<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portafolio Web</title>
	<link rel="shortcut icon" href="#"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/estilos.css" rel="stylesheet" media="screen">
	<link href="css/styles.css" rel="stylesheet" media="screen">
</head>
<body class="noppading">
		<div class="container-fluid" >
			<div class="row" style="background: #006BD6;">
				<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
				
				<center><img src="img/titulo.png" class="img-responsive"></center>

				</div>
				<div class="col-md-4 col-sm-4">
				
				<center><img src="img/blocks.png" style="height: 200px; margin-top: 15px;" class="img-responsive"></center>

				</div>
				
			</div>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12" style="z-index:1000;">
				<div id='cssmenu'>
				<ul>
				   <li class="active"><a href='index.php'>INICIO</a></li>
				   <li class='has-sub'><a href='#servicios'>SERVICIOS</a>
				      <ul>
				         <li class='has-sub'><a href='#desarrolloweb'>DESARROLLO WEB</a>
				            <ul>
				               <li><a href='#'>Paginas</a></li>
				               <li><a href='#galeria'>Galeria</a></li>
				            </ul>
				         </li>
				         <li class='has-sub'><a href='#desarrolloapp'>DESARROLLO APP</a>
				            <ul>
				               <li><a href='#'>Aplicaciones</a></li>
				               <li><a href='#galeria'>Galeria</a></li>
				            </ul>
				         </li>
				      </ul>
				   </li>
				   <li><a href='#sobremi'>SOBRE MI</a></li>
				   <li><a href='#contacto'>CONTACTO</a></li>
				</ul>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<div id="carrusel" class="carousel slide" data-ride="carousel"> 
			       	<ol class=" carousel-indicators"> 
			           	<li data-target="#carrusel" data-slide-to="0" class="active"></li> 
			            <li data-target="#carrusel" data-slide-to="1"></li> 
			            <li data-target="#carrusel" data-slide-to="2"></li>
			            <li data-target="#carrusel" data-slide-to="3"></li> 
			        </ol>
			            <div class="carousel-inner"> 
			                <div class="item active"> 
			                    <img src="img/slider1.png" alt=""> 
			                  		<div class="carousel-caption">
			                               
			                       	</div> 
			                </div> 
			                <div class="item">
			                    <img src="img/slider2.png" alt=""> 
			                        <div class="carousel-caption">
											
			                       	</div>
			                </div> 
			                <div class="item">
			                    <img src="img/slider3.png" alt=""> 
			                        <div class="carousel-caption">
											
			                       	</div>
			                </div>
			                <div class="item"> 
			                    <img src="img/slider4.png" alt=""> 
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
		</div>
		<div class="col-md-12" style="background:#333;height:2px;"></div>
		<div class="col-md-12 text-center" id="servicios">
			<div class="row">
				<div class="col-md-12">
					<h2>SERVICIOS</h2>
				</div>
			</div>
			<div class="col-md-12 nopadding" style="background:#bbb;height:2px;"></div>
			<div class="row">
				<div class="col-md-12 text-left" id="desarrolloweb">
					<h2><span class="glyphicon glyphicon-cog"></span>&nbsp;Desarrollo Web</h2>
					<h4><span class="glyphicon glyphicon-link"></span>&nbsp;Links WEB:</h4>&nbsp;
					<a href="proyectos/aj/index.php">E-Commerce</a></br>&nbsp;
					<a href="proyectos/web_ioi/index.html">Empresas Nacionales</a>
				</div>
			</div>
			<div class="col-md-12 nopadding" style="background:#bbb;height:2px;"></div>
			<div class="row">
				<div class="col-md-12 text-left" id="desarrolloapp">
					<h2><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Desarrollo de Aplicaciones</h2>
					<h4><span class="glyphicon glyphicon-link"></span>&nbsp;Links APP:</h4>&nbsp;
					<a href="proyectos/scj/index.php">Sistema Parroquial</a>
				</div>
			</div>
			<div class="col-md-12 nopadding" style="background:#bbb;height:2px;"></div>
			<div class="row">
				<div class="col-md-12 text-left" id="galeria">
					<h2><span class="glyphicon glyphicon-picture"></span>&nbsp;Galeria</h2>
				</div>
				<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 nopadding">
					<img id="imgGaleria" src="img/gal1.jpg" class="img-responsive img-thumbnail" style="border: 3px solid #333;">
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 nopadding">
					<img onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/gal1.jpg" class="img-responsive img-thumbnail">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<img  onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/gal2.jpg" class="img-responsive img-thumbnail">
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-6 nopadding">
					<img  onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/gal3.jpg" class="img-responsive img-thumbnail">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<img  onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/gal4.jpg" class="img-responsive img-thumbnail">
						</div>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 col-xs-6 nopadding margintop">
						<img onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/gal5.jpg" class="img-responsive img-thumbnail">
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 nopadding margintop">
						<img onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/gal6.jpg" class="img-responsive img-thumbnail">
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 nopadding margintop">
						<img onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/gal7.jpg" class="img-responsive img-thumbnail">
					</div>
					<div class="col-md-2 col-sm-2 col-xs-6 nopadding margintop">
						<img onclick="javascript:document.getElementById('imgGaleria').src=this.src;" src="img/gal8.jpg" class="img-responsive img-thumbnail">
					</div>
				</div>
		</div>
		<div class="col-md-12" style="background:#333;height:2px;"></div>
		<div class="col-md-12" id="sobremi">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>SOBRE MI</h2>
				</div>
				<div class="col-md-3 col-sm-3">
					<center><img src="img/fotoperfil.jpg" class="img-responsive img-circle"></center>
				</div>
				<div class="col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1">
					<blockquote>
						<h2>ALBERTO PERNALETE.</h2>
						<h4><b>Titulo Obtenido:</b>&nbsp;Ingeniero de Sistemas.</h4>
						<h4><b>Nacionalidad:</b>&nbsp;Venezolano.</h4>
						<h4><b>Primaria:</b>&nbsp;Liceo de Tecnología Industrial(LITIN).</h4>
						<h4><b>Secundaria:</b>&nbsp;Liceo de Tecnología Industrial(LITIN).</h4>
						<h4><b>Universitario:</b>&nbsp;Universidad Bicentenaria de Aragua(UBA).</h4>
						<h4><b>Cursos:</b>&nbsp;AR Sistemas.</h4>
					</blockquote> 
				</div>
				<div class="col-md-12" style="background:#006BD6;height:1px;"></div>
			</div>
		</div>
	</div>
	<footer id="contacto">
		<div class="container-fluid" style="color:#ddd;">
			<div class="col-md-12 col-sm-12 text-center"><h2>CONTACTAME</h2></div>
			<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 redes">
				<b>e-mail:</b> AJPernaleteL@gmail.com<br><br>
				<a href="http://www.twitter.com/ajpernaletel" class=" redes activo"><b>twitter:</b> @AJPernaleteL</a><br><br>
				<a onclick="return skypeCheck();" href="skype:aj.pernalete?call" class="redes activo"><b>skype:</b> AJ.Pernalete</a><br><br>
			</div>
			<div class="col-md-4 col-sm-4 text-center block-center">
							<form  action="MAILTO:ajpernaletel@gmail.com"  method="post" enctype="text/plain">
										<div class="form-group">
											<label for="nombre" class="texto-form">Nombre</label>
											<input type="text" class="form-control" name="nombre" placeholder="Coloque su nombre..." required>
										</div>
										<div class="form-group">
											<label for="correo" class="texto-form">Correo</label>
											<input type="email" class="form-control" name="correo" placeholder="coloque su e-mail..." required>
										</div>
										<div class="form-group">
											<label for="comentarios" class="texto-form">Comentarios:</label>
											<textarea class="form-control" rows="4" name="comentarios" placeholder="Escriba sus especificaciones o sugerencias..." required></textarea> 
										</div>
									<div class="text-center"> 
										<button type="submit" class="btn btn-primary">Enviar</button>
										<button type="reset" class="btn btn-danger">Borrar</button>
									</div>
							</form>
			</div>
			<div class="col-md-3 col-sm-3">
				<a class="twitter-timeline" href="https://twitter.com/AJPernaleteL" data-widget-id="548292501871009792">Tweets por el @AJPernaleteL.</a>
			</div>
			<div class="row">
				<div class="col-md-10 col-sm-10" style="font-family:arial;font-size:15px;color:#ddd;text-align:right;padding-top:20px;padding-bottom:20px;margin-top:20px;">
				Creado por Ing. AJ Pernalete.
				</div>
			</div>
		</div>
	</footer>
</body>
</html>

							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
				if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>