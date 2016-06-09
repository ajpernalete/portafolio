<?php
	session_start();
	include("../conect.php");
	//Guardar en variable cada uno de los datos recogidos del formulario registrar usuario
	$idu=$_SESSION['idu'];
	$categoria = $_POST['categoria'];
	$marca = $_POST['marca'];
	$estadoproducto = $_POST['estadoproducto'];
	$nombre = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];
	$precio = $_POST['precio'];
	$fecha = date('Y/m/d');
	$descripcion = $_POST['descripcion'];
	$id= $_POST['id'];
	
	$wsql="UPDATE producto SET idcategoria='$categoria',idmarca='$marca',idestadodeproducto='$estadoproducto',nombre='$nombre',cantidad='$cantidad',precio='$precio',fecharegistro='$fecha',descripcion='$descripcion' WHERE idproducto='$id'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se modifico con exito el producto!!";
	$url="location: ../../producto.php";


mysql_close($link);
header($url);
?>
	