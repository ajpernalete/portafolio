<?php
session_start();
//------------------------Eliminar Noticias----------------
include("../conexi.php");

	$id=$_GET['id'];
	$idr=$_GET['idr'];

	$wsqli="delete from rnoticiasfotos where idrnoticiasfoto='$idr'";
	$linki->query($wsqli);  
	if($linki->errno) die($linki->error);
	$file_name="foto".$idr.".jpg";
	$add="../../imgnoticias/$file_name";
	unlink($add);
	$file_name="fotop".$idr.".jpg";
	$add="../../imgnoticias/$file_name";
	unlink($add);
	
	$_SESSION['men']="La Foto se Eliminó con éxito!!";

$url="location:subirfotos.php?id=".$id;
header($url);	
?>