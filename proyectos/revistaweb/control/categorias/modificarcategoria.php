<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	
	$wsql="UPDATE categorias SET nombre='$nombre'
	WHERE idcategoria='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito la categoria!!";
	$url="location: ../../categorias.php";


mysql_close($link);
header($url);
?>
	