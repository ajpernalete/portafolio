<?php 
session_start();
include("../conexi.php");

extract($_POST);
/*$wsqli = "SELECT * FROM rnoticiasfotos WHERE piedefoto = '$piedefoto'";
		$result = $linki->query($wsqli);
		if($linki->errno) die($linki->error);
		$row = $result->fetch_array();
		
		if($row>0){
			$_SESSION['men']="Este piedefoto: ".$piedefoto. " ya existe en nuestra base de datos";
		}else{
*/

			$wsqli = "INSERT INTO rnoticiasvideos(idnoticia,ruta,comentario) VALUES ('$id','$ruta','$comentario')";
 			$linki->query($wsqli);  
 			if($linki->errno) die($linki->error);
			$idr=mysqli_insert_id($linki);
			mysqli_close($linki); //Cierra la conexión de la operación 
			$_SESSION['men']="El Video se registró con éxito!!";
		/*}*/
		$url="location:subirvideos.php?id=".$id;
header($url);




/*echo "<script>parent.jQuery.fancybox.close();</script>";*/
?>
