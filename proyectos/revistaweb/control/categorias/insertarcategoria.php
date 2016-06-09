<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$nombre=$_POST['nombre'];
	//Leer consulta hasta fin de datos
	$wsql="INSERT into categorias ('nombre') VALUES ('$estatus','$nombre')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito la categoria!!";
	$url="location: ../../categorias.php";

	header($url);


mysql_close($link);
?>