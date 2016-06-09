<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$id=$_POST['id'];
	$idcategoria=$_POST['categoria'];
	$idsubcategoria=$_POST['subcategoria'];
	$tit=$_POST['titulo'];
	$sub=$_POST['subtitulo'];
	$des=$_POST['descripcion'];
	
	$wsql="UPDATE publicaciones SET idcategoria='$idcategoria', idsubcategoria='$idsubcategoria', titulo='$tit', subtitulo='$sub', descripcion='$des'
	WHERE idpublicacion='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito la publicacion!!";
	$url="location: ../../publicaciones.php?idm=2";


mysql_close($link);
header($url);
?>
	