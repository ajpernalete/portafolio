<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$nombre=$_POST['nombre'];
	$idcategoria=$_POST['idcategoria'];
	//Leer consulta hasta fin de datos
	$wsql="INSERT into subcategorias ('idcategoria', 'nombre')VALUES ('$idcategoria', '$nombre')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito la subcategoria!!";
	$url="location: ../../subcategorias.php";

	header($url);


mysql_close($link);
?>