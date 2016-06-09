<?php
	session_start();
	include("../conect.php");
	date_default_timezone_set("America/Caracas");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$idu=$_SESSION['idu'];
	$idcategoria=$_POST['categoria'];
	$idsubcategoria=$_POST['subcategoria'];
	$tit=$_POST['titulo'];
	$sub=$_POST['subtitulo'];
	$des=$_POST['descripcion'];
	$fecha= date('Y/m/d');
	$hora= date('H:i:s');
	//Leer consulta hasta fin de datos
	$wsql="INSERT into publicaciones (idestatus, idcategoria, idsubcategoria, idusuario, titulo, subtitulo, descripcion, fecha, hora)
	VALUES( '1', '$idcategoria', '$idsubcategoria', '$idu', '$tit', '$sub', '$des', '$fecha', '$hora')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito la publicacion!!";
	$url="location: ../../publicaciones.php?idm=2";

	header($url);


mysql_close($link);
?>