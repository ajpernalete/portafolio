<?php
	include("conect.php");
	//Leer consulta hasta fin de datos
	$wsql="select * from filiacion order by nombre";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	while($row= mysql_fetch_array($result)){
?>
	<option value="<?php echo $row["idfiliacion"] ?>"<?php if($row['idfiliacion']==$filiacion){ ?>  selected <?php } ?>><?php echo $row["nombre"] ?></option>

<?php } 
mysql_close($link);
mysql_free_result($result); 
?>