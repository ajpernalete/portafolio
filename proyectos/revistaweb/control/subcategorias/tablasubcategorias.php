<?php
include('control/conect.php');
 $wsql = "SELECT idsubcategoria as id, subcategorias.nombre as ns, categorias.nombre as nc
 FROM subcategorias
 INNER JOIN categorias on categorias.idcategoria=subcategorias.idcategoria

 ORDER BY idsubcategoria";

    $result=mysql_query($wsql,$link);
    echo mysql_error($link);


 while($row=mysql_fetch_array($result)){


    
?>
 <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['nc'] ?></td>
  <td><?php echo $row['ns'] ?></td>
  <td>

  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Accion
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="subcategorias.php?id=<?php echo $row['id'] ?>">Modificar</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="control/subcategorias/eliminarsubcategoria.php?id=<?php echo $row['id'] ?>">Eliminar</a></li>
        </ul>
      </div>
    </div>

  </td>
 </tr>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>