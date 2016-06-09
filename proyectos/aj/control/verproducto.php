<?php
	include("conect.php");

	$filtro="";
	if(isset($_GET['idc'])){ //Cuando se da click en categorias
		$idc=$_GET['idc'];
		$filtro="and producto.idcategoria='$idc'";
	}
	if(isset($_GET['idm'])){ //Cuando se da click en marcas
		$idm=$_GET['idm'];
		$filtro="and producto.idmarca='$idm'";
	}
	if(isset($_GET['idu'])){ //Cuando se da click en ubicacion
		$idu=$_GET['idu'];
		$filtro="and usuario.idubicacion='$idu'";
	}
	if (isset($_GET['buscar'])) {
		$buscar=$_GET['buscar'];
		$filtro=" and producto.nombre like '$buscar%' or producto.descripcion like '%$buscar%'";
	}

	$wsql="SELECT idproducto,categorias.nombre as nc, precio, producto.nombre as np FROM producto 
	inner join categorias on producto.idcategoria=categorias.idcategoria
	inner join usuario on producto.idusuario=usuario.idusuario
	where producto.idestatus='1' $filtro
	order by idproducto desc";
	$result=mysql_query($wsql,$link);
	$cp=mysql_num_rows($result);
	$ppp=6;
	$paginas=ceil($cp/$ppp);
	$inicio=0;
	if(isset($_GET['p'])){
		$p=$_GET['p'];
		$inicio=$ppp*($p-1);
	}

	$X=($inicio-1);

	//Leer consulta hasta fin de datos
	$wsql="SELECT idproducto,categorias.nombre as nc, precio, producto.nombre as np FROM producto 
	inner join categorias on producto.idcategoria=categorias.idcategoria
	inner join usuario on producto.idusuario=usuario.idusuario
	where producto.idestatus='1' $filtro
	order by idproducto desc
	limit $inicio,$ppp";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	while($row= mysql_fetch_array($result)){
		$id=$row['idproducto'];
		$imagen="imgpro/foto".$id.".png";
?>

								<div class="col-md-4 col-sm-4">
					            	<div class="panel panel-default img-panel-borde">
						            <div class="panel-heading">
						                <div class="panel-title text-center"><h4><?php echo $row["nc"] ?></h4></div>
						            </div>
						            <div class="panel-body">

					             		<a data-toggle="modal" href="#myModal<?php echo $id ?>">
					             		<?php if(file_exists($imagen)) {  ?>
					             		<img src="imgpro/foto<?php echo $id ?>.png" class="img-responsive center-block">
					             		<?php } else { ?>
					             		<img src="imgpro/contruccion.jpg" style="width:150px;height:150px" class="img-responsive center-block">
					             		<?php } ?>
					             		</a>
										
										<div class="modal fade" id="myModal<?php echo $id ?>">
					    				  <div class="modal-dialog text-description nopadding">
					    				  	  <img src="img/close.png" data-dismiss="modal">
					    				      <div class="modal-body">
					    				      		<?php if(file_exists($imagen)) {  ?>
					    				      		<img src="imgpro/fotom<?php echo $id ?>.jpg" class="img-thumbnail">
					    				      		<?php } else { ?>
					             					<img src="imgpro/contruccion.jpg" class="img-responsive center-block">
					             					<?php } ?>
					    				      </div>
					    				      <b><?php echo $row["np"] ?></b><br>
					    				      <?php echo $row["precio"] ?>$
					    				  </div>
					    				</div>
					    			</div>
					    			<div class="panel-footer text-center">
					    				<a href="index.php?idp=<?php echo $id ?>">
										<input type="button" value="Detalle" class="btn btn-default">
										</a> 
								        <a href="#">
										<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span></button>
										</a>
									</div>
					              </div> 
					            </div>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>