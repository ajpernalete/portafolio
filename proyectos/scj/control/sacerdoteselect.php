<?php
	include("conect.php");
	//Leer consulta hasta fin de datos
	$wsql="select * from sacerdotes order by nombre";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	while($row= mysql_fetch_array($result)){
?>
	<option value="<?php echo $row["idsacerdote"] ?>"<?php if($row['idsacerdote']==$sacerdote){ ?>  selected <?php } ?>><?php echo $row["nombre"]." ".$row["apellido"]?></option>

<?php } 
mysql_close($link);
mysql_free_result($result); 
?>