<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$id= $_POST['id'];

	$wsql="UPDATE sacerdotes SET nombre='$nombre',apellido='$apellido'
	WHERE idsacerdote='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito el campo de Sacerdotes!!";
	$url="location: ../../sacerdotes.php";


mysql_close($link);
header($url);
?>
	