<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$id= $_GET['id'];
	
	$wsql="DELETE from bautizos where idbautizo='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se Elimino con exito el Acta de bautizo!!";
	$url="location: ../../bautizo.php";
	echo $wsql;

mysql_close($link);
header($url);
?>
	