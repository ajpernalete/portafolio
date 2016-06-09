<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$nombre = $_POST['nombre'];
	$id= $_POST['id'];

	$wsql="UPDATE filiacion SET nombre='$nombre'
	WHERE idfiliacion='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito el campo de Filiacion!!";
	$url="location: ../../filiacion.php";


mysql_close($link);
header($url);
?>
	