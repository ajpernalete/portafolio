<?php 
session_start();
include("../conexi.php");
include("../../funciones/funciones.php");
utf8_decode(extract($_POST));
$wsqli = "SELECT * FROM noticias WHERE titulo = '$titulo'";
		$result = $linki->query($wsqli);
		if($linki->errno) die($linki->error);
		$row = $result->fetch_array();
		
		if($row>0){
			$_SESSION['men']="Este titulo: ".$titulo. " ya existe en nuestra base de datos";
		}else{


			$idusuario=$_SESSION['idu'];
			
		
			date_default_timezone_set('America/Caracas');
			$fecharegistro=date('Y/m/d');
			$horaregistro=date("H:i:s:a");
			
			$titulo		=antiinjection($titulo);
			$subtitulo	=antiinjection($subtitulo);
			$descripcion=antiinjection($descripcion);

			$wsqli = "INSERT INTO noticias(idusuario,idtiponoticia,idcategoria,idsubcategoria,idestatus,titulo,subtitulo,descripcion,fecharegistro,horaregistro,fuente)
			VALUES ('$idusuario','$idtiponoticia','$idcategoria','$idsubcategoria','$idestatus','$titulo','$subtitulo','$descripcion','$fecharegistro','$horaregistro','$fuente')";
 			$linki->query($wsqli);  
 			if($linki->errno) die($linki->error);
			mysqli_close($linki); //Cierra la conexión de la operación 
			$_SESSION['men']="La noticia se registró con éxito!!";
		}
header("location:../../sistema.php?pag=not");
/*echo "<script>parent.jQuery.fancybox.close();</script>";*/
?>
