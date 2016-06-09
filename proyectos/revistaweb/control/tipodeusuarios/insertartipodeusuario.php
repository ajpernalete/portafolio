<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$idestatus=$_POST['idestatus'];
	$nombre=$_POST['nombre'];
	//Leer consulta hasta fin de datos
	$wsql="INSERT into tipodeusuario ('idestatus', 'nombre') VALUES ('$idestatus','$nombre')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito el tipo de usuario!!";
	$url="location: ../../tipodeusuarios.php";

	header($url);


mysql_close($link);
?>