  <?php  include('control/conexi.php');

				$idtiponoticia	="";
				$idcategoria	="";
				$idsubcategoria	="";
				$idestatus		="";
				$titulo			="";
				$subtitulo		="";
				$piedefoto		="";
				$descripcion	="";
				$fuente			="";
				$nboton="Grabar";
				$destino="control/noticias/guardar.php";
				$id="";
				if(isset($_GET['id'])){ // esto es para modificar
					$id=$_GET['id'];
					$wsqli="select * from noticias where idnoticia='$id'";
					$result = $linki->query($wsqli);
					if($linki->errno) die($linki->error);
					if($row = $result->fetch_array()){

						$idtiponoticia	=$row['idtiponoticia'];
						$idcategoria	=$row['idcategoria'];
						$idsubcategoria	=$row['idsubcategoria'];
						$idestatus		=$row['idestatus'];
						$titulo			=$row['titulo'];
						$subtitulo		=$row['subtitulo'];
						$piedefoto		=$row['piedefoto'];
						$descripcion	=$row['descripcion'];
						$fuente			=$row['fuente'];
            
						$nboton="Actualizar";	
						$destino="control/noticias/modificar.php";
					
					}
							
				}
				
				?>
<!--<!DOCTYPE html>
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
  <!--<script src="../../js/jquery_local.js"></script>-->

    
    
    
    <!-- Bootstrap core CSS -->
    <!--<link href="../../css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Bootstrap theme -->
   <!-- <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
	<!--<link rel="stylesheet" type="text/css" href="../../css/estilos.css">-->
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



     <script type="text/javascript" src="js/jquery.jcombo.js"></script>
    <?php //include('../../librerias/modal-emergente-datatable.html'); ?>
   
 
    <script>
    $(function() {
    	$("#tiponoticia").jCombo({
    		url:"funciones/combotiponoticia.php",
    		initial_text: "Seleccione una opci&oacute;n",
    		first_optval : "-1",
			selected_value: "<?php  echo $idtiponoticia ?>",
    	});
      	$("#categorias").jCombo({
        	url:"funciones/combocategorias.php",
        	initial_text: "Seleccione una opci&oacute;n",
        	first_optval : "-1",
			selected_value: "<?php  echo $idcategoria ?>",
        });
      $("#subcategorias").jCombo({
        	url:"funciones/combosubcategorias.php?id=",
       	 	parent: "#categorias",
        	initial_text: "Seleccione una opci&oacute;n",
        	first_optval : "-1",
			selected_value: "<?php  echo $idsubcategoria ?>",
        });
      
		 $("#estatus").jCombo({
        	url:"funciones/comboestatus.php",
        	initial_text: "Seleccione una opci&oacute;n",
        	first_optval : "-1",
			selected_value: "<?php  echo $idestatus ?>",
        });
	});
	</script>
        

<!--  </head>
<body>
<div class="container">-->
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />


<div class="row">
<div class="col-md-12">
   				

            	<form  name="form1"  class="form-horizontal" role="form" method="post" action="<?php echo $destino ?>">

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
                            	Noticia <?php echo $nboton ?>
                           </span>
                    	</div>
                  <div class="panel-body">

                 		 	<div class="form-group">
                                <label for="idproductor" class="col-xs-3 control-label">Tipo de Noticia</label>
                                <div class="col-xs-9">
                                <span id="spryselect1">
                                  <select class="form-control" name="idtiponoticia" id="tiponoticia">
                                  </select>
                                 </span>
                              </div>  
							</div>
                   			<div class="form-group">
                            	<label for="idaseguradora" class="col-xs-3 control-label">Categoria</label>
                            	<div class="col-xs-9">
                                <span id="spryselect2">
                                	<select class="form-control" name="idcategoria" id="categorias">
                              	  </select>
                               	  </span>
                              </div>
                        	</div>
                   			<div class="form-group">
                                <label for="tiporamo" class="col-xs-3 control-label">Sub Categoria</label>
                                <div class="col-xs-9">
                                <span id="spryselect3">
                                 <select class="form-control" name="idsubcategoria" id="subcategorias"> </select>
                                </span>
                                </div>
                    </div>        
                  			
						
 							  <div class="form-group">
                                <label for="estatus" class="col-xs-3 control-label">Estatus</label>
                                <div class="col-xs-9">
                                <span id="spryselect4">
                                  <select class="form-control" name="idestatus" id="estatus">
                                    <option value="">Seleccione una Opción</option>

                                  </select>
                                </span></div>
                        </div>  

						 <div class="form-group">
                            	<label for="nombre" class="col-xs-3 control-label">Fuente</label>
                               	<div class="col-xs-9">
                                 	<input type="text" class="form-control" id="numero" name="fuente" value="<?php  echo $fuente ?>" placeholder="Indique la fuente" required>         
                               	</div>
                    </div>
                        
                   			<div class="form-group">
                            	<label for="nombre" class="col-xs-3 control-label">Titulo</label>
                               	<div class="col-xs-9">
                                	<textarea name="titulo" rows="3" class="form-control" placeholder="Indique el Titulo" required><?php echo $titulo ?></textarea>
      
                               	</div>
                           </div>
                           <div class="form-group">
                            	<label for="nombre" class="col-xs-3 control-label">Sub Titulo</label>
                               	<div class="col-xs-9">
                                 	<textarea name="subtitulo" rows="5" class="form-control" placeholder="Indique el Sub Titulo" required><?php echo  $subtitulo ?></textarea>        
                               	</div>
                           </div>
                           
                           <div class="form-group">
                            	<label for="nombre" class="col-xs-3 control-label">Descripción</label>
                               	<div class="col-xs-9">
                                 	<textarea name="descripcion"  rows="20" class="form-control" placeholder="Indique la descripción" required><?php echo  $descripcion ?></textarea>  
                                    
                                    
                                   
                                    
                                          
                               	</div>
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
<!--             </div>
             
</html>
</body>-->
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {invalidValue:"-1"});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {invalidValue:"-1"});
</script>
