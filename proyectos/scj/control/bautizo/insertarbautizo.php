<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$idu=$_SESSION['idu'];
	$idbautizo = $_POST['idbautizo'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$padres = $_POST['padres'];
	$padrinos = $_POST['padrinos'];
	$fechadenacimiento = $_POST['fechadenacimiento'];
	$fechadebautizo = $_POST['fechadebautizo'];
	$notas = $_POST['notas'];
	$registrocivil = $_POST['registrocivil'];
	$telefonos = $_POST['telefonos'];
	$sacerdote = $_POST['sacerdote'];
	$filiacion = $_POST['filiacion'];
	

	//Leer consulta hasta fin de datos
	$wsql="INSERT into bautizos (idbautizo, idestatus, idfiliacion, idsacerdote, idusuario, nombre, apellido, padres, fechadenacimiento, fechadebautizo,
	 padrinos, nota, telefonos, registrocivil)
	VALUES('$idbautizo', '1', '$filiacion', '$sacerdote', '$idu', '$nombre', '$apellido', '$padres', '$fechadenacimiento', '$fechadebautizo', '$padrinos', '$nota', 
		'$telefonos', '$registrocivil')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito el Acta de Bautizo!!";
	$url="location: ../../bautizo.php";

	header($url);


mysql_close($link);
?>