<?php 
	include("control/conect.php");

	$limit=4;
	$wsql="SELECT idpublicacion, titulo, subtitulo from publicaciones
	where publicaciones.idestatus='1' order by idpublicacion desc limit 0,$limit";
	$result=mysql_query($wsql,$link);
	echo mysql_error($link);

	$c=0;
	while($row= mysql_fetch_array($result)){
		$arrid[$c]=$row["idpublicacion"];
		$arrti[$c]=$row["titulo"];
		$arrsu[$c]=$row["subtitulo"];

	$c++;
} ?>


					<div class="row carruselnoticia">
					<div class="col-md-12 col-lg-8">
						<div id="carousel-example-generic" class="carousel" data-ride="carousel"> 


		                    <div class="carousel-inner"> 
		                        <div class="item active"> 
		                            <img src="img/foto<?php echo $arrid[0] ?>.jpg" class="img-responsive img-thumbnail" style="width:888px;height:350px;"> 
		                            <div class="carousel-caption">
		                                <a href="index.php?idp=<?php echo $arrid[0] ?>"><b><?php echo $arrsu[0] ?></b></a>
		                       		</div> 
		                        </div> 


		                        <div class="item">
		                            <img src="img/foto<?php echo $arrid[1] ?>.jpg" class="img-responsive img-thumbnail" style="width:888px;height:350px;"> 
		                            <div class="carousel-caption">
		                                <a href="index.php?idp=<?php echo $arrid[1] ?>"><b><?php echo $arrsu[1] ?></b></a>
		                       		</div>
		                        </div> 


		                        <div class="item">
		                            <img src="img/foto<?php echo $arrid[2] ?>.jpg" class="img-responsive img-thumbnail" style="width:888px;height:350px;"> 
		                            <div class="carousel-caption">
		                                <a href="index.php?idp=<?php echo $arrid[2] ?>"><b><?php echo $arrsu[2] ?></b></a>
		                       		</div>
		                        </div> 


		                        <div class="item">
		                             <img src="img/foto<?php echo $arrid[3] ?>.jpg" class="img-responsive img-thumbnail" style="width:888px;height:350px;"> 
		                             <div class="carousel-caption">
		                                <a href="index.php?idp=<?php echo $arrid[3] ?>"><b><?php echo $arrsu[3] ?></b></a>
		                       		</div>
					            </div> 
					        </div> 


								 	<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right"></span>
								</a>
                    	</div>
                    </div>
                    <ul class="list-group hidden-xs hidden-sm hidden-md col-lg-4 nopadding">
                    	<li data-target="#carousel-example-generic" data-slide-to="0" class="list-group-item estilotexto" class="active"><?php echo $arrti[0] ?></li>
                    	<li data-target="#carousel-example-generic" data-slide-to="1" class="list-group-item estilotexto"><?php echo $arrti[1] ?></li>
                    	<li data-target="#carousel-example-generic" data-slide-to="2" class="list-group-item estilotexto"><?php echo $arrti[2] ?></li>
                    	<li data-target="#carousel-example-generic" data-slide-to="3" class="list-group-item estilotexto"><?php echo $arrti[3] ?></li>
                    </ul>
                    </div>
                    <?php 
mysql_close($link);
mysql_free_result($result);
?>