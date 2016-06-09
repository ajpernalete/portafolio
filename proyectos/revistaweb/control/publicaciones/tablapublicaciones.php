<?php
include('control/conect.php');
 $wsql = "SELECT idpublicacion, categorias.nombre as nc, subcategorias.nombre as ns, usuarios.nombre as nu, titulo, subtitulo, descripcion, fecha, hora
 FROM publicaciones

 inner join categorias on categorias.idcategoria = publicaciones.idcategoria 
 inner join subcategorias on subcategorias.idsubcategoria = publicaciones.idsubcategoria 
 inner join usuarios on usuarios.idusuario = publicaciones.idusuario 

 ORDER BY publicaciones.idpublicacion desc";

    $result=mysql_query($wsql,$link);
    echo mysql_error($link);


 while($row=mysql_fetch_array($result)){

  $tit =  substr($row['titulo'], 0, 15);
  $sub =  substr($row['subtitulo'], 0, 20);
  $des =  substr($row['descripcion'], 0, 30);

    
?>
 <tr>
  <td><img src="img/foto<?php echo $row['idpublicacion']?>.jpg" height="70" width="100"></td>
  <td><?php echo $row['nu'] ?></td>
  <td><?php echo $row['nc'] ?></td>
  <td><?php echo $row['ns'] ?></td>
  <td><?php echo $tit ?></td>
  <td><?php echo $sub ?></td>
  <td><?php echo $des ?></td>
  <td>

  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Accion
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="publicaciones.php?idm=2&id=<?php echo $row['idpublicacion'] ?>">Modificar</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1"  data-toggle="modal" href="control/publicaciones/subirfoto.php?id=<?php echo $row['idpublicacion'] ?>">Subir Foto</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" href="#modalvideo">Subir Video</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="control/publicaciones/eliminarpublicacion.php?id=<?php echo $row['idpublicacion'] ?>">Eliminar</a></li>
        </ul>
      </div>
    </div>

  </td>
 </tr>

                <div class="modal fade" id="modalfoto"> 
                      <div class="modal-dialog "> 
                      <div class="modal-content">
                      <div class="modal-header">
                        <form action="control/publicaciones/subirfoto.php" method="post" enctype="multipart/form-data">
                            Seleccione la imagen a subir:
                            <input class="btn btn-default" type="file" name="fileToUpload" id="fileToUpload">
                            <input class="btn btn-default" type="submit" value="Subir Imagen" name="submit">
                        </form>
                      </div>
                      </div>
                      </div>
                </div>


                <div class="modal fade" id="modalvideo"> 
                      <div class="modal-dialog "> 

                      </div>
                </div>


<?php } 
mysql_close($link);
mysql_free_result($result);
?>
