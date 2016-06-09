<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$estatus = $_POST['estatus'];
	$tipodeusuarios = $_POST['tipodeusuario'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$clave = $_POST['clave'];
	$telefonos = $_POST['telefonos'];
	$id= $_POST['id'];

	$wsql="UPDATE usuarios SET idestatus='$estatus', idtipodeusuario='$tipodeusuarios', nombre='$nombre', apellido='$apellido', clave='$clave', 
	telefonos='$telefonos'
	WHERE idusuario='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito el campo de Usuario!!";
	$url="location: ../../Usuario.php";



mysql_close($link);
header($url);
?>
	