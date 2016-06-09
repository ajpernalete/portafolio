<?php
session_start();
//------------------------Eliminar Noticias----------------
include("../conect.php");

	$id=$_GET['id'];
	$idr=$_GET['idr'];

	$wsql="DELETE from rpublicacionfoto where idrpublicacionfoto='$idr'";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);
	$file_name="foto".$idr.".jpg";
	$add="../../img/$file_name";
	unlink($add);
	$file_name="fotop".$idr.".jpg";
	$add="../../img/$file_name";
	unlink($add);
	
	$_SESSION['mensaje']="Se Elimino con exito la publicacion!!";

$url="location: subirfoto.php?id=".$id;
mysql_close($link);
header($url);	
?>