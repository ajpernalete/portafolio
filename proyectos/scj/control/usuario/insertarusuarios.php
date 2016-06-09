<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$clave = $_POST['clave'];
	$telefonos = $_POST['telefonos'];
	$estatus = $_POST['estatus'];
	$tipodeusuario = $_POST['tipodeusuario'];

	//Leer consulta hasta fin de datos
	$wsql="INSERT into usuarios (idestatus, idtipodeusuario, nombre, apellido, clave, telefonos)
	VALUES('$estatus', '$tipodeusuario', '$nombre', '$apellido', '$clave', '$telefonos')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito el campo de Usurio!!";
	$url="location: ../../usuario.php";

	header($url);


mysql_close($link);
?>