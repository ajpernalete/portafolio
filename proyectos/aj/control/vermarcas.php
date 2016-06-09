<?php
	include("conect.php");

	$vert="";
	if(isset($_GET['vtm'])==2){ //Cuando se da click en categorias
		$vert="";
	} else {
		$vert="where marcas.idestatus=1 ";
	}


	//Leer consulta hasta fin de datos
	$wsql="SELECT marcas.idmarca, marcas.nombre, count(*) as cp FROM 
	marcas inner join producto 
	on marcas.idmarca=producto.idmarca 
	$vert
	group by marcas.idmarca";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	while($row= mysql_fetch_array($result)){

		$id=$row['idmarca'];
?>
	<a href="index.php?idm=<?php echo $id ?>" class="list-group-item text-left"><span class="badge"><?php echo $row["cp"] ?></span><?php echo $row["nombre"] ?></a>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>