<?php 
include('control/conect.php');
 $wsql = "SELECT usuarios.idusuario as id, usuarios.nombre as nu, usuarios.apellido as au, clave, telefonos, estatus.nombre as ne, tipodeusuarios.nombre as nt
 FROM usuarios

 inner join estatus on estatus.idestatus=usuarios.idestatus
 inner join tipodeusuarios on tipodeusuarios.idtipodeusuario=usuarios.idtipodeusuario

 ORDER BY usuarios.idusuario";

    $result=mysql_query($wsql,$link);
    echo mysql_error($link);


 while($row=mysql_fetch_array($result)){

    
?>
 <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo $row['ne'] ?></td>
  <td><?php echo $row['nt'] ?></td>
  <td><?php echo $row['nu'] ?></td>
  <td><?php echo $row['au'] ?></td>
  <td><?php echo $row['clave'] ?></td>
  <td><?php echo $row['telefonos'] ?></td>
  <td>

  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Accion
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="usuario.php?id=<?php echo $row['id'] ?>">Modificar</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Imprimir</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="control/usuario/eliminarusuarios.php?id=<?php echo $row['id'] ?>">Eliminar</a></li>
        </ul>
      </div>
    </div>

  </td>
 </tr>

<?php } 
mysql_close($link);
mysql_free_result($result);
?>