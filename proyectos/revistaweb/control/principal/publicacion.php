<?php 
	include("control/conect.php");

	$filtro="";
	if(isset($_GET['idc'])){ //Cuando se da click en categorias
		$idc=$_GET['idc'];
		$filtro="and publicaciones.idcategoria='$idc'";
	}

	$wsql="SELECT idpublicacion, titulo, subtitulo from publicaciones
	where publicaciones.idestatus='1' $filtro
	order by idpublicacion desc";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	$c=1;
	while($row= mysql_fetch_array($result)){
		$id=$row["idpublicacion"];
	
?>

					<div class="col-md-12 text-center pub"><a href="index.php?idp=<?php echo $id ?>">
						<div class="pub-titulo"><?php echo $row["titulo"] ?></div>
						<img src="img/foto<?php echo $id ?>.jpg" class="img-responsive img-thumbnail pub-img" style="width:888px;height:350px;">
						<div class="pub-des"><?php echo $row["subtitulo"] ?></div></a>
					</div>
					
					<?php
					if ($c==2) {
						include('publicidadprincipal.php');
						$c=0; 
					}

$c++;
} 
mysql_close($link);
mysql_free_result($result);
?>