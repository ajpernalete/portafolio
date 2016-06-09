<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$id= $_GET['id'];
	
	$wsql="DELETE from producto where idproducto='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se Elimino con exito el producto!!";
	$url="location: ../../producto.php";
	echo $wsql;

mysql_close($link);
header($url);
?>
	