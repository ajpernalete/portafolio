<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$idu=$_SESSION['idu'];
	$id= $_GET['id'];
	
	$wsql="UPDATE producto SET idestatus='2' WHERE idproducto='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se Pauso con exito el producto!!";
	$url="location: ../../producto.php";

mysql_close($link);
header($url);
?>
	