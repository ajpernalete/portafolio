<?php
include('control/conect.php');
 $wsql = "SELECT idtipodeusuario as id, idestatus, nombre
 FROM tipodeusuario

 ORDER BY idtipodeusuario";

    $result=mysql_query($wsql,$link);
    echo mysql_error($link);


 while($row=mysql_fetch_array($result)){


    
?>
 <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['idestatus'] ?></td>
  <td><?php echo $row['nombre'] ?></td>
  <td>

  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Accion
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="tipodeusuarios.php?id=<?php echo $row['id'] ?>">Modificar</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="control/tipodeusuarios/eliminartipodeusaurio.php?id=<?php echo $row['id'] ?>">Eliminar</a></li>
        </ul>
      </div>
    </div>

  </td>
 </tr>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>