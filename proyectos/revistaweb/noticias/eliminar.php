<?php
session_start();
//------------------------Eliminar Noticias----------------
include("../conexi.php");

	$id=$_GET['id'];

	$wsqli="delete from noticias where idnoticia='$id'";
	$linki->query($wsqli);  
	if($linki->errno) die($linki->error);

	$_SESSION['men']="La noticia se Eliminó con éxito!!";

header("location:../../sistema.php?pag=not");	
?>