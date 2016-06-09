<?php
	include("conect.php");

	$vert="";
	if(isset($_GET['vtu'])==2){ //Cuando se da click en categorias
		$vert="";
	} else {
		$vert="where ubicacion.idestatus=1 ";
	}

	//Leer consulta hasta fin de datos
	$wsql="SELECT ubicacion.idubicacion, count(*) as CU, ubicacion.nombre
		from ubicacion inner join usuario
		on ubicacion.idubicacion=usuario.idubicacion
		inner join producto
		on usuario.idusuario = producto.idusuario
		$vert
		group by ubicacion.idubicacion";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	while($row= mysql_fetch_array($result)){

		$id=$row['idubicacion']
?>
	<a href="index.php?idu=<?php echo $id ?>" class="list-group-item text-left"><span class="badge"><?php echo $row["CU"] ?></span><?php echo $row["nombre"] ?></a>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>