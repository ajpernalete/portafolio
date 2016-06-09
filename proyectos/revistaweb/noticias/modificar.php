<?php
session_start();
include("../conexi.php");
include("../../funciones/funciones.php");
	extract($_POST);
	$titulo		=antiinjection($titulo);
	$subtitulo	=antiinjection($subtitulo);
	$descripcion=antiinjection($descripcion);
	$wsqli="UPDATE noticias SET idestatus		='$idestatus',
								idtiponoticia	='$idtiponoticia',
								idcategoria		='$idcategoria',
								idsubcategoria	='$idsubcategoria',
								titulo			='$titulo',
								subtitulo		='$subtitulo',
								fuente			='$fuente',
								descripcion		='$descripcion'
								where idnoticia ='$id'";
	$linki->query($wsqli);  
	if($linki->errno) die($linki->error);
	//echo $wsqli;
	$_SESSION['men']="La noticia se modificó con éxito!!";
	header("location:../../sistema.php?pag=not");
/*echo "<script>parent.jQuery.fancybox.close();</script>";*/
?>