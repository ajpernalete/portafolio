
<?php
{ 
	include("sesion/conect.php");
	$consulta=mysql_query("SELECT * FROM paises");
	mysql_close();

	// Voy imprimiendo el primer select compuesto por los paises
	echo "<label for='paises'>Pais</label>";
	echo "<select name='paises' id='paises' class='form-control' onChange='cargaContenido(this.id)'>";
	echo "<option value='0'>Elige</option>";

	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value=".$registro[0].">".$registro[1]."</option>";
	}
	echo "</select>";
 }

?>