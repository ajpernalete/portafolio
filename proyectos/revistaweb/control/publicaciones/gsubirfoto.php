<?php 
session_start();
include("../conect.php");
	$idr="";
	$id=$_POST['id'];
	$piedefoto=$_POST['piedefoto'];

	$wsql="INSERT into rpublicacionfoto (idpublicacion, piedefoto) VALUES('$id', '$piedefoto')";
	 mysql_query($wsql,$link);
	 echo mysql_error($link);

	 $idr=mysql_insert_id($link);

$msg=subirimg($idr);

mysql_close($link);

	$_SESSION['mensaje']=$msg;
	$url="location: subirfoto.php?id=".$id;

	header($url);





function subirimg($id){
$msg="";
if($_FILES['foto']['name']!==""){
	
	$uploadedfileload="true";
	$uploadedfile_size=$_FILES['foto']['size'];
	//echo $_FILES['minutae']['type']
	//echo $_FILES['minutae']['size'];
	if ($_FILES['foto']['size']>2000000)
	{
		$msg=$msg."El archivo es mayor que 200KB, debes reducirlo antes de subirlo<BR>";
		$uploadedfileload="false";
	}
		if (!($_FILES['foto']['type']=="jpg"))
	{	
			$msg=$msg."Tu archivo tiene que ser jpg. Otros archivos no son permitidos<BR>";
			$uploadedfileload="false";
	}	
	$str=$_FILES['foto']['name'];
	$file_name="foto".$id.".jpg";
	$add="../../img/$file_name";
	if($uploadedfileload=="true"){
		if(move_uploaded_file ($_FILES['foto']['tmp_name'],$add)){
	
	
			// otro metodo proporcionando la imagen
			
			/*$miniatura_ancho_maximo =630;
			$miniatura_alto_maximo = 420;
			
			$info_imagen = getimagesize($add);
			$imagen_ancho = $info_imagen[0];
			$imagen_alto = $info_imagen[1];
			$imagen_tipo = $info_imagen['mime'];
			
			
			$proporcion_imagen = $imagen_ancho / $imagen_alto;
			$proporcion_miniatura = $miniatura_ancho_maximo / $miniatura_alto_maximo;
			$t=0;
			if ( $proporcion_imagen > $proporcion_miniatura ){
				$miniatura_ancho = $miniatura_ancho_maximo;
				$miniatura_alto = $miniatura_ancho_maximo / $proporcion_imagen;
				$t=1;
			} else if ( $proporcion_imagen < $proporcion_miniatura ){
				$miniatura_ancho = $miniatura_ancho_maximo * $proporcion_imagen;
				$miniatura_alto = $miniatura_alto_maximo;
				$t=2;
			} else {
				$t=3;
				$miniatura_ancho = $miniatura_ancho_maximo;
				$miniatura_alto = $miniatura_alto_maximo;
			}
			
			
			switch ( $imagen_tipo ){
				case "image/jpg":
				case "image/jpeg":
					$imagen = imagecreatefromjpeg( $add );
					break;
				case "image/png":
					$imagen = imagecreatefrompng( $add );
					break;
				case "image/gif":
					$imagen = imagecreatefromgif( $$add );
					break;
			}
			
			$lienzo = imagecreatetruecolor( $miniatura_ancho, $miniatura_alto );
			
			imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho, $miniatura_alto, $imagen_ancho, $imagen_alto);
			
			
			imagejpeg($lienzo, "../../imgnoticias/foto".$id.".jpg", 80);*/
	
	
	
	
	
	
	
	
	
            $msg="Ha sido subido satisfactoriamente";
			
			//esto creo la imagen de 500 por 500
			$img=imagecreatefromjpeg($add);
			$imagen=imagecreatetruecolor(630,420);
			imagecopyresized($imagen,$img,0,0,0,0,630,420,ImageSX($img),ImageSY($img));
			$file_name="foto".$id.".jpg";
			$add="../../img/$file_name";
			imagejpeg($imagen,$add);
			//esto es para crear la imagen pequeña
			$img=imagecreatefromjpeg($add);
			$imagen=imagecreatetruecolor(200,133);
			imagecopyresized($imagen,$img,0,0,0,0,200,133,ImageSX($img),ImageSY($img));
			$file_name="fotop".$id.".jpg";
			$add="../../img/$file_name";
			imagejpeg($imagen,$add);
			
			
		
		}else{

			//$msg="Error al subir el archivo";
			}
		}else{
			//echo "<div class='alert alert-error' style='width:550px; margin:1em auto'>"; 
			//echo $msg."<br>";
			//echo "</div>";
		}
	}
	return $msg;
}

?>