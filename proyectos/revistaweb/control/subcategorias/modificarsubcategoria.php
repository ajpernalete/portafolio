<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$id=$_POST['id'];
	$idcategoria=$_POST['idcategoria'];
	$nombre=$_POST['nombre'];
	
	$wsql="UPDATE subcategorias SET idcategoria='$idcategoria', nombre='$nombre'
	WHERE idsubcategoria='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito la subcategoria!!";
	$url="location: ../../subcategorias.php";


mysql_close($link);
header($url);
?>
	