<?php
include('control/conect.php');
 $wsql = "SELECT idcategoria as id, nombre as nc
 FROM categorias

 ORDER BY idcategoria";

    $result=mysql_query($wsql,$link);
    echo mysql_error($link);


 while($row=mysql_fetch_array($result)){


    
?>
 <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['nc'] ?></td>
  <td>

  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Accion
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="categorias.php?id=<?php echo $row['id'] ?>">Modificar</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="control/categorias/eliminarcategoria.php?id=<?php echo $row['id'] ?>">Eliminar</a></li>
        </ul>
      </div>
    </div>

  </td>
 </tr>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>