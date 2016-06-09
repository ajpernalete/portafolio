<?php include('../conexi.php') ;

 		//$nboton="Grabar";
       	$titulo="";
        if(isset($_GET['id'])){ // esto es para modificar
          $id=$_GET['id'];
          $wsqli="select * from noticias where idnoticia='$id'";
          $result = $linki->query($wsqli);
          if($linki->errno) die($linki->error);
          if($row = $result->fetch_array()){
            $titulo  =$row['titulo'];
			$nboton="Grabar";
          }   
        }
        
        ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cafe Noticias Carabobo</title>
    
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
   <!-- <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>-->
  <script src="../../js/jquery_local.js"></script>

    
    
    
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script type="text/javascript" src="../../js/jquery.jcombo.js"></script>
    <?php include('../../librerias/modal-emergente-datatable2.html') ?>
    
  </head>
<body>
<br>
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
   				
                
            	<form  name="form1"  class="form-horizontal" role="form" method="post" action="gsubirvideo.php" enctype="multipart/form-data">
     				 <input name="id" type="hidden" value="<?php echo $id ?>">
					<?php if(isset($_SESSION['mensaje'])){
							$tm="alert-success";
							if($_SESSION['tm']==0){
								$tm="alert-danger";	
							}
						?> 						
                    <div class="alert <?php echo $tm ?> alert-dismissable">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                    	<?php 
								echo $_SESSION['mensaje'];
								unset($_SESSION['mensaje']);
						?>
                    </div>
                    <?php }?>
                    <div class="panel  panel-default">
                    	<div class="panel-heading">
                        	<span class="panel-title well">
                            	Subir Video <?php echo $nboton ?>
                                 
                           </span>
                    	</div>

                        <div class="panel-body">
                 		 	 <div class="form-group">
                                <label for="estatus" class="col-xs-3 control-label"><h3>Titulo</h3></label>
                                <div class="col-xs-9"><h3><?php echo $titulo ?></h3></div>
                        </div>    
                   			<div class="form-group">
                            <label for="idaseguradora" class="col-xs-3 control-label">Ruta</label>
                            	<div class="col-xs-9">  
                                    <textarea name="ruta" cols="" rows="" class="form-control" required></textarea>
                            	</div>
                        	</div>
                            <div class="form-group">
                            <label for="idaseguradora" class="col-xs-3 control-label">Comentario</label>
                            	<div class="col-xs-9">
                                	<input name="comentario" type="text" class="form-control">
                            	</div>
                        	</div>
 
                       </div>
                
                <!-- Button -->
                     
                      <div class="panel-footer">
                          <div class="controls text-center">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary"><?php echo $nboton ?></button>

                            
                          </div>
                        </div>     
   					</form>

  			 </div>
             </div>
             </div>
             
             <div>
             <table class="table table-striped table-bordered table-hover" id="example">
    <thead class="well">
      <tr>
       
        <td width="84%" class="text-center">Comentario</td>
        <td width="8%" class="text-center">Accion</td>
      </tr>
     </thead>
     <tbody>
     <?php 

	  $wsqli="select * from rnoticiasvideos where idnoticia='$id' order by idrnoticiasvideo desc";

	  $result = $linki->query($wsqli);
		if($linki->errno) die($linki->error);
		while($row = $result->fetch_array()){
			$idr=$row['idrnoticiasvideo'];
	 		$comentario=$row['comentario'];
	 ?>
      <tr>
        
        <td><?php echo $row['comentario'] ?></td>
        <td> 
    	<a class="eliminar_dato" title="<?php echo 'Seguro que desea eliminar este registro:<br><center><h4>'.$comentario.'</h4><center>' ?>" href="eliminarvideo.php?modo=e&id=<?php echo $id; ?>&idr=<?php echo $idr; ?>"><button type="button" class="btn btn-danger btn-xs">Eliminar</button></a>

        </td>

      </tr>
     <?php 
	 	}
	 	mysqli_close($linki); //Cierra la conexión de la operación 
	 ?> 
     </tbody>
 
</table>
             </div>
             
</html>
</body>