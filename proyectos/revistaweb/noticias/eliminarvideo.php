<?php
session_start();
//------------------------Eliminar Noticias----------------
include("../conexi.php");

	$id=$_GET['id'];
	$idr=$_GET['idr'];

	$wsqli="delete from rnoticiasvideos where idrnoticiasvideo='$idr'";
	$linki->query($wsqli);  
	if($linki->errno) die($linki->error);
	
	
	$_SESSION['men']="El Video se Eliminó con éxito!!";

$url="location:subirvideos.php?id=".$id;
header($url);	
?>