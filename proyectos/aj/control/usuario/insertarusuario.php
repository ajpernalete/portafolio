<?php
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$ubicacion = $_POST['ubicacion'];
	$sexo = $_POST['sexo'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$clave = $_POST['clave'];
	$correo = $_POST['correo'];
	$telefonos = $_POST['telefono'];
	$fecha = date('Y/m/d');
	$direccion = $_POST['direccion'];

	//Validar correo
	$wsql="SELECT * from usuario where correo='$correo'";
	$result=mysql_query($wsql,$link);
	$row=mysql_fetch_array($result);

	if($row==0){ 


	//Leer consulta hasta fin de datos
	$wsql="insert into usuario (idestatus, idtipodeusuario, idubicacion, idsexo, nombre, apellido, clave, correo, telefonos, fecharegistro, direccion)
	VALUES('1','3', '$ubicacion', '$sexo', '$nombre', '$apellido', '$clave', '$correo', '$telefonos', '$fecha', '$direccion')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito!!";
	$url="location: ../../index.php";

	} else {
		$_SESSION['mensaje']="Correo ya registrado";
		$url="location: ../../index.php";
	}
	header($url);


mysql_close($link);
?>