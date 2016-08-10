<?php
	session_start();
	include("conect.php");
	//Capturar los datos en variables
	$correo= $_POST['correo'];
	$clave= $_POST['clave'];

	//Lectura de base de datos
	$wsql="SELECT * from usuario, clientes where 
	usuario='$correo' and password='$clave'";

	$result=mysql_query($wsql,$link);
	echo mysql_error($link);
	$row=mysql_fetch_array($result);

	if($row>0){//cuando existe		
		$_SESSION['bienvenida']="Bienvenido ".$row['nombre']." ".$row['apellido'].".";
		$_SESSION['tipous']=$row['idtipodeusuario'];
		$_SESSION['idu']=$row['idusuario'];
		$url="location: ../../index.php";
	} else {//cuando no existe
		session_unset();
		$_SESSION['mensaje']="<strong>Error!</strong> Ha ingresado un correo o clave erroneos.";
		$url="location: ../../login.php";
	}
	header($url);