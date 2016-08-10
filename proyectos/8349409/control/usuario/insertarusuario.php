<?php
	include("../sesion/conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$paises = $_POST['paises'];
	$estados = $_POST['estados'];
	$ciudades = $_POST['ciudades'];
	$sexo = $_POST['sexo'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$clave = $_POST['clave'];
	$correo = $_POST['correo'];
	$telefonos = $_POST['telefono'];
	$fecha = date('Y/m/d');
	$direccion = $_POST['direccion'];
	$celular = $_POST['celular'];
	$usuario = $_POST['correo'];

	//Validar correo de los usuarios para que no se mezclen entre ellos
	$wsql="SELECT * from usuario, cliente where correo='$correo'";
	$result=mysql_query($wsql,$link);
	$row=mysql_fetch_array($result);

	if($row!=0){ 


	//Leer consulta hasta fin de datos
	$wsql1="insert into clientes (nombre, apellido, idsexo, correo_electronico, idpais, idciudad, idestado, telefono, celular, 
	direccion_redes_sociales, idusuario, fecha_registro)
	VALUES('$nombre', '$apellido', '$sexo', '$correo', '2', '2', '11', '$telefono', '$celular', '$direccion', 
	'$correo', '$fecha',)";
	 mysql_query($wsql1,$link);
	 echo mysql_error($link);

	 $wsql2="insert into usuario (idtipousuario, usuario, idestatus, password)
	VALUES('3', '$correo', '1', '$clave')";
	 mysql_query($wsql2,$link);
	 echo mysql_error($link);

	$_SESSION['bienvenida']="Se registro con exito!!";
	$url="location: ../../index.php";

	} else {
		$_SESSION['mensaje']="Correo ya registrado";
		$url="location: ../../registrarse.php";
	}
	header($url);


mysql_close($link);
?>