<?php
	include("control/conect.php");

		$idd=$_GET['idp'];

	//Leer consulta hasta fin de datos
	$wsql="SELECT publicaciones.idpublicacion, publicaciones.titulo as tit, publicaciones.subtitulo as sub, publicaciones.descripcion as des,
	categorias.nombre as nc, usuarios.nombre as nu, subcategorias.nombre as ns, rpublicacionfoto.piedefoto as pf 
	from publicaciones
	inner join categorias on publicaciones.idcategoria=categorias.idcategoria
	inner join usuarios on publicaciones.idusuario=usuarios.idusuario
	inner join subcategorias on publicaciones.idsubcategoria=subcategorias.idsubcategoria
	inner join rpublicacionfoto on rpublicacionfoto.idpublicacion=publicaciones.idpublicacion
	where publicaciones.idpublicacion='$idd'";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	$row=mysql_fetch_array($result);
		$id=$row['idpublicacion'];
		$nc=$row["nc"];
		$ns=$row['ns'];
		$nu=$row['nu'];
		$des=$row['des'];
		$tit=$row['tit'];
		$sub=$row['sub'];
		$pf=$row['pf'];
		?>
			<div class="col-md-9 nopadding">
				<ol class="breadcrumb">
				  <li><a href="index.php">Inicio</a></li>
				  <li class="active"><?php echo $row["nc"] ?></li>
				  <li class="active"><?php echo $ns ?></li>
				</ol>    

				<div class="col-md-12 pub">
					<div class="pub-titulo"><strong><?php echo $tit ?>.</strong></div>
					<img src="img/foto<?php echo $id ?>.jpg" class="img-responsive pub-img" style="width:999px;height:450px;">
  					<div class="piedefoto"><strong><?php echo $pf ?></strong></div>
					<div class="pub-des"><strong><?php echo $sub ?>.</strong></div>
					<div class="pub-des"><?php echo $des ?>.</div>
					<blockquote style="color:#1C1C1C;">
  					<h4><strong>Autor: <?php echo $nu ?>.</strong></h4>
					</blockquote>
				</div>
			</div>


<?php
mysql_close($link);
?>