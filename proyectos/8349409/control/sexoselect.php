<?php
	include("sesion/conect.php");
	//Leer consulta hasta fin de datos
	$wsql="select * from sexo order by idsexo";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	while($row= mysql_fetch_array($result)){
?>
	<option value="<?php echo $row["idsexo"] ?>"><?php echo $row["sexo"] ?></option>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>