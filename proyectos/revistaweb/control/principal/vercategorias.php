<?php
	include("control/conect.php");

	//Leer consulta hasta fin de datos
	$wsql="SELECT categorias.idcategoria, categorias.nombre, count(*) as cp 
	FROM categorias inner join publicaciones on categorias.idcategoria=publicaciones.idcategoria 
	group by categorias.idcategoria";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	while($row= mysql_fetch_array($result)){

		$id=$row['idcategoria'];
?>

	<li><a href="index.php?idc=<?php echo $id ?>"><?php echo $row["nombre"]; ?><span class="badge"><?php echo $row["cp"]; ?></span>
</a></li>
<?php } 


mysql_close($link);
mysql_free_result($result);
?>