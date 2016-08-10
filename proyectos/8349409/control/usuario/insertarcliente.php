<?php
	include("../sesion/conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$paises = $_POST['paises'];
	$estados = $_POST['estados'];
	$ciudades = $_POST['ciudades'];
	$sexo = $_POST['sexo'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$telefonos = $_POST['telefono'];
	$fecha = date('Y/m/d');
	$direccion = $_POST['direccion'];
	$celular = $_POST['celular'];

	//Validar correo de los usuarios para que no se mezclen entre ellos
	$wsql="SELECT * from clientes where correo='$correo'";
	$result=mysql_query($wsql,$link);
	$row=mysql_fetch_array($result);

	if($row==0){ 


	//Leer consulta hasta fin de datos
	$wsql="insert into clientes (nombre, apellido, idsexo, correo_electronico, idpais, idciudad, idestado, telefono, celular, 
	direccion_redes_sociales, idusuario, fecha_registro)
	VALUES('$nombre', '$apellido', '1', '$correo', '2', '2', '11', '$telefono', '$celular', '$direccion', 
	'$correo', '$fecha',)";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);

	$_SESSION['bienvenida']="Se registro con exito!!";
	$url="location: ../../index.php";

	} else {
		$_SESSION['mensaje']="Correo ya registrado";
		$url="location: ../../index.php";
	}
	header($url);


mysql_close($link);
?>