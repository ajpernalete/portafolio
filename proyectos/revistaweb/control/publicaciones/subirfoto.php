<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html;" charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Revista Web</title>
	<link rel="shortcut icon" href="../../img/favicon.png"/>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<link href="../../css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../../css/estilos.css" rel="stylesheet" media="screen">

</head>
<body class="bd_sis">
	<div class="container">
		<div class="row">
			<div class="col-md-4 nomargin nopadding block-center" id="logo">
				<img src="../../img/logo2.png" class="img-responsive block.left" alt="Logo Vzla Box Fitness">
			</div>
			<div class="col-md-8 hidden-xs hidden-sm nomargin nopadding" id="banner">
				<img src="../../img/banner.jpg" class="img-responsive">
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

					<?php include('../conect.php');
					$id=$_GET['id'];

					$wsql="SELECT * from publicaciones where idpublicacion='$id'";
					$result=mysql_query($wsql,$link);
    				echo mysql_error($link);
    				$row=mysql_fetch_array($result)


					 ?>


					 <form  name="form1"  class="form-horizontal" role="form" method="post" action="gsubirfoto.php" enctype="multipart/form-data">
     				 <input name="id" type="hidden" value="<?php echo $id ?>">
		 			<div class="panel  panel-default">
                    	<div class="panel-heading">
                        	<span class="panel-title well">
                            	Subir Foto 
                                 
                           </span>
                    	</div>
                    	 <div class="panel-header text-center">
                    	 		<label for="titulo"><h3>Titulo: <?php echo $row['titulo'] ?></h3></label>
                    	 </div>
                        <div class="panel-body">  
                   			<div class="form-group">
                            <label for="foto" class="col-xs-3 control-label">Foto</label>
                            	<div class="col-xs-9">
                                	<input name="foto" type="file" class="form-control" required>
                            	</div>
                        	</div>
                            <div class="form-group">
                            <label for="piedefoto" class="col-xs-3 control-label">Pie de Foto</label>
                            	<div class="col-xs-9">
                                	<input name="piedefoto" type="text" class="form-control">
                            	</div>
                        	</div>
 
                       </div>
                
                <!-- Button -->
                     
                      <div class="panel-footer">
                          <div class="controls text-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
							<button type="reset" class="btn btn-danger">Borrar</button>
                            
                          </div>
                        </div> 
                      </div>
                      </form>

                      <?php mysql_free_result($result); ?>
                      <table class="table table-striped table-bordered table-hover" id="example">
					    <thead class="well">
					      <tr>
					        <td width="10%" class="text-center">Foto</td>
					        <td width="80%" class="text-center">Pie de Foto</td>
					        <td width="10%" class="text-center">Accion</td>
					      </tr>
					     </thead>
					     <tbody>
					     <?php 
					     $id=$_GET['id'];
						  $wsql="SELECT * from rpublicacionfoto where idpublicacion='$id' order by idrpublicacionfoto desc";
						  $result=mysql_query($wsql,$link);
    					  echo mysql_error($link);
							while($row=mysql_fetch_array($result)){
								$idr=$row['idrpublicacionfoto'];


						 ?>
					      <tr>
					        <td><img src="../../img/foto<?php echo $idr; ?>.jpg" height="70" width="100"></td>
					        <td><?php echo $row['piedefoto'] ?></td>
					        <td>

							  <div class="dropdown">
							        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Accion
							        <span class="caret"></span></button>
							        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
							          <li role="presentation"><a role="menuitem" tabindex="-1" href="control/publicaciones/subirfoto.php?id=<?php echo $row['idpublicacion'] ?>">Modificar</a></li>
							          <li role="presentation"><a role="menuitem" tabindex="-1" href="eliminarfoto.php?id=<?php echo $id; ?>&idr=<?php echo $idr; ?>">Eliminar</a></li>
							        </ul>
							      </div>
							    </div>
							  </td>

					      </tr>
					     <?php 
						 	}
						 	mysql_close($link);//Cierra la conexión de la operación 
						 ?> 
					     </tbody>
					 
					</table>


		<div class="row">
			<div class="col-md-12 text-center nopadding footer_sis">
				<h4>Pie de Pagina</h4>
			</div>
		</div>
	</div>
</body>
</html>