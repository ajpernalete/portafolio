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
	
	$wsql="UPDATE bautizos SET idbautizo='$idbautizo',idfiliacion='$filiacion',idsacerdote='$sacerdote',nombre='$nombre',apellido='$apellido',padres='$padres',
	fechadenacimiento='$fechadenacimiento',fechadebautizo='$fechadebautizo',padrinos='$padrinos',nota='$nota',telefonos='$telefonos',registrocivil='$registrocivil'
	WHERE idbautizo='$idbautizo'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito el Acta de bautizo!!";
	$url="location: ../../bautizo.php";


mysql_close($link);
header($url);
?>
	