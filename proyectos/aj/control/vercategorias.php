<?php
	include("conect.php");

	$vert="";
	if(isset($_GET['vtc'])==2){ //Cuando se da click en categorias
		$vert="";
	} else {
		$vert="where categorias.idestatus=1 ";
	}


	//Leer consulta hasta fin de datos
	$wsql="SELECT categorias.idcategoria, categorias.nombre, count(*) as cp 
	FROM categorias inner join producto on categorias.idcategoria=producto.idcategoria 
	$vert 
	group by categorias.idcategoria";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	while($row= mysql_fetch_array($result)){

		$id=$row['idcategoria'];
?>

	<a href="index.php?idc=<?php echo $id ?>" class="list-group-item text-left"><span class="badge"><?php echo $row["cp"]; ?></span><?php echo $row["nombre"]; ?></a>

<?php } 


mysql_close($link);
mysql_free_result($result);
?>