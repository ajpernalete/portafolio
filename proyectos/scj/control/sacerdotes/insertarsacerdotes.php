<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];

	//Leer consulta hasta fin de datos
	$wsql="INSERT into sacerdotes (idestatus, nombre, apellido)
	VALUES('1','$nombre', '$apellido')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito el campo de Sacerdotes!!";
	$url="location: ../../sacerdotes.php";

	header($url);


mysql_close($link);
?>