<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$id=$_POST['id'];
	$idestatus=$_POST['idestatus'];
	$nombre=$_POST['nombre'];
	
	$wsql="UPDATE tipodeusuario SET idestatus='$idestatus', nombre='$nombre'
	WHERE idtipodeusuario='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito el tipo de usuario!!";
	$url="location: ../../tipodeusuarios.php";


mysql_close($link);
header($url);
?>
	