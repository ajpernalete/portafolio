<?php
/* capturar variable por método GET */
if (isset($_GET['p']))
  $p=$_GET['p'];
else
  $p=1;
?>

					            	<ul class="pagination">
											<li class="pagination">

											  <?php if($p==1){  ?>
											  <li><a href="#">&laquo;</a></li>
											  <?php } else { ?>
											  <li><a href="index.php?p=<?php echo ($p-1) ?>">&laquo;</a></li>
											  <?php } ?>


											  <?php
											  for($i=1;$i<=$paginas;$i++){ 
											  ?>

											  <li><a href="index.php?p=<?php echo $i ?>"><?php echo $i ?></a></li>


											  <?php } ?>

											  
											  <?php if($p==$paginas){  ?>
											  <li><a href="#">&raquo;</a></li>
											  <?php } else { ?>
											  <li><a href="index.php?p=<?php echo ($p+1) ?>">&raquo;</a></li>
											  <?php } ?>

											</li>
									</ul>