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
	

	//Leer consulta hasta fin de datos
	$wsql="insert into producto (idestatus, idusuario, idcategoria, idmarca, idestadodeproducto, nombre, cantidad, precio, fecharegistro, descripcion)
	VALUES('1','$idu', '$categoria', '$marca', '$estadoproducto', '$nombre', '$cantidad', '$precio', '$fecha', '$descripcion')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$_SESSION['mensaje']="Se registro con exito el producto!!";
	$url="location: ../../producto.php";

	header($url);


mysql_close($link);
?>