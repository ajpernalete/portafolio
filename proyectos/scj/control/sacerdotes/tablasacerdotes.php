<?php 
include('control/conect.php');
 $wsql = "SELECT sacerdotes.idsacerdote as id, estatus.nombre as ne, sacerdotes.nombre as nsac, apellido as asac
 FROM sacerdotes

 inner join estatus on estatus.idestatus=sacerdotes.idestatus

 ORDER BY sacerdotes.idsacerdote";

    $result=mysql_query($wsql,$link);
    echo mysql_error($link);


 while($row=mysql_fetch_array($result)){


    
?>
 <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['ne'] ?></td>
  <td><?php echo $row['nsac'] ?></td>
  <td><?php echo $row['asac'] ?></td>
  <td>

  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Accion
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="sacerdotes.php?id=<?php echo $row['id'] ?>">Modificar</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="control/sacerdotes/eliminarsacerdotes.php?id=<?php echo $row['id'] ?>">Eliminar</a></li>
        </ul>
      </div>
    </div>

  </td>
 </tr>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>