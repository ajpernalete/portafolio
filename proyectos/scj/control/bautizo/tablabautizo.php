<?php 
include('control/conect.php');
 $wsql = "SELECT bautizos.idbautizo as id, bautizos.nombre as nb, bautizos.apellido as ab, padres, padrinos, fechadenacimiento as fn, 
 fechadebautizo as fb, nota, sacerdotes.nombre as nsac, sacerdotes.apellido as asac, registrocivil
 FROM bautizos

 inner join sacerdotes on sacerdotes.idsacerdote = bautizos.idsacerdote 

 ORDER BY bautizos.idbautizo";

    $result=mysql_query($wsql,$link);
    echo mysql_error($link);


 while($row=mysql_fetch_array($result)){

  $nota =  substr($row['nota'], 0, 15);
  $padres =  substr($row['padres'], 0, 30);
  $padrinos =  substr($row['padrinos'], 0, 30);
  $rc =  substr($row['registrocivil'], 0, 30);

    
?>
 <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['nb'] ?></td>
  <td><?php echo $row['ab'] ?></td>
  <td><?php echo $padres ?></td>
  <td><?php echo $padrinos ?></td>
  <td><?php echo $row['fn'] ?></td>
  <td><?php echo $row['fb'] ?></td>
  <td><?php echo $nota ?></td>
  <td><?php echo $row['nsac'] ?>&nbsp;<?php echo $row['asac'] ?></td>
  <td><?php echo $rc ?></td>
  <td>

  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Accion
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="bautizo.php?id=<?php echo $row['id'] ?>">Modificar</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Imprimir</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="control/bautizo/eliminarbautizo.php?id=<?php echo $row['id'] ?>">Eliminar</a></li>
        </ul>
      </div>
    </div>

  </td>
 </tr>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>