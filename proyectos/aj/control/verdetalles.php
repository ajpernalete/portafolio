<?php
	include("conect.php");

		$idd=$_GET['idp'];

	//Leer consulta hasta fin de datos
	$wsql="SELECT idproducto, producto.nombre as np, marcas.nombre as nm, precio, cantidad, producto.fecharegistro as fecha, descripcion, 
	usuario.nombre as nus, ubicacion.nombre as nu, correo, telefonos, direccion, estadodeproducto.nombre as nep from producto
	inner join usuario on producto.idusuario=usuario.idusuario
	inner join marcas on producto.idmarca=marcas.idmarca
	inner join ubicacion on usuario.idubicacion=ubicacion.idubicacion
	inner join estadodeproducto on producto.idestadodeproducto=estadodeproducto.idestadodeproducto
	where producto.idproducto='$idd'";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

$row= mysql_fetch_array($result);
		$id=$row['idproducto'];
		$f=1;
		if(isset($_GET['f'])) $f=$_GET['f'];



		$imagen="imgpro/fotod".$id."1.jpg";
		$imagen="imgpro/fotod".$id."2.jpg";
		$imagen="imgpro/fotod".$id."3.jpg";
		$imagen="imgpro/fotod".$id."4.jpg";
		?>


			<div class="col-md-9 col-sm-9 nopadding" style="border-right: 1px solid #999;border-bottom: 1px solid #999;">
				<?php if(file_exists($imagen)) {  ?>
				<img id="imgGaleria" src="imgpro/fotod<?php echo $id.$f ?>.jpg" class="img-responsive center-block" style="width:400px;height:400px">
				<?php } else { ?>
				<img src="imgpro/noimagen.jpg" class="img-responsive center-block">
				<?php } ?>		

			</div>
			<div class="col-md- col-sm-3 nopadding" style="border-bottom: 1px solid #999;">
					<div class="col-md-12 col-sm-12 nopadding">
						<?php if(file_exists($imagen)) {  ?>
						<img onmouseover="javascript:document.getElementById('imgGaleria').src=this.src;" src="imgpro/fotod<?php echo $id ?>1.jpg" class="miniatura img-responsive center-block">
						<?php } else { ?>
					    <img src="imgpro/noimagen.jpg" style="width:100px;height:100px" class="img-responsive center-block">
					    <?php } ?>
					</div>
					<div class="col-md-12 col-sm-12 nopadding">
						<?php if(file_exists($imagen)) {  ?>
						<img onmouseover="javascript:document.getElementById('imgGaleria').src=this.src;" src="imgpro/fotod<?php echo $id ?>2.jpg" class="miniatura img-responsive center-block">
						<?php } else { ?>
					    <img src="imgpro/noimagen.jpg" style="width:100px;height:100px" class="img-responsive center-block">
					    <?php } ?>
					</div>
					<div class="col-md-12 col-sm-12 nopadding">
						<?php if(file_exists($imagen)) {  ?>
						<img onmouseover="javascript:document.getElementById('imgGaleria').src=this.src;" src="imgpro/fotod<?php echo $id ?>3.jpg" class="miniatura img-responsive center-block">
						<?php } else { ?>
					    <img src="imgpro/noimagen.jpg" style="width:100px;height:100px" class="img-responsive center-block">
					    <?php } ?>
					</div>
					<div class="col-md-12 col-sm-12 nopadding">
						<?php if(file_exists($imagen)) {  ?>
						<img onmouseover="javascript:document.getElementById('imgGaleria').src=this.src;" src="imgpro/fotod<?php echo $id ?>4.jpg" class="miniatura img-responsive center-block">
						<?php } else { ?>
					    <img src="imgpro/noimagen.jpg" style="width:100px;height:100px" class="img-responsive center-block">
					    <?php } ?>
					</div>
			</div>
			<div class="col-md-12 col-sm-12 nopadding text-left">
				 <blockquote>
				<h2><?php echo $row["np"] ?>.</h2>
				<h5><b>Marca:</b> <?php echo $row["nm"] ?>.</h5>
				<h5><b>Precio:</b> <?php echo $row["precio"] ?>$.</h5>
				<h5><b>Estado:</b> <?php echo $row["nep"] ?>.</h5>
				<h5><b>Cantidades Disponibles:</b> <?php echo $row["cantidad"] ?>.</h5>
				<h5><b>Fecha de publicacion:</b> <?php echo $row["fecha"] ?>.</h5>
				<h5><b>Descripcion:</b> <?php echo $row["descripcion"] ?>.</h5>
				<a href="#">
				<input type="button" value="Comprar" class="btn btn-default block-center">
				</a> 
				<a href="#">
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart block-center"></span></button>
				</a>
				<a data-toggle="modal" href="#Modalusuario" style=" text-decoration: none;color:#000;">
				<h2><?php echo $row["nus"] ?>.</h2>
				</a>
				 </blockquote> 
				 						<div class="modal fade" id="Modalusuario">
					    				  <div class="modal-dialog text-description nopadding">
					    				  	  <img src="img/close.png" data-dismiss="modal">
					    				      <div class="modal-body">
					    				      	<div class="col-md-8 col-sm-8 nopadding text-left modalusuario">
					    				      		<h3><?php echo $row["nus"] ?>.</h3>
													<h5><b>Ubicacion:</b> <?php echo $row["nu"] ?>.</h5>
													<h5><b>Correo Electronico:</b> <?php echo $row["correo"] ?>.</h5>
													<h5><b>Telefono:</b> <?php echo $row["telefonos"] ?>.</h5>
													<h5><b>Direccion:</b> <?php echo $row["direccion"] ?>.</h5>
												</div>
					    				      </div>
					    				  </div>
					    				</div>
			</div>
			<div class="col-md-12 col-sm-12 nopadding text-left" style="border-top: 1px solid #999;">
			</div>



<?php
mysql_close($link);
?>