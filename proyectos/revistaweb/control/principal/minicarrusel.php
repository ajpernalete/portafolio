<?php 
    include("control/conect.php");

    $wsql="SELECT idpublicacion from publicaciones
    where publicaciones.idestatus='1' order by idpublicacion desc limit 0,17";
    $result=mysql_query($wsql,$link);
    echo mysql_error($link);

    $c=0;
    while($row= mysql_fetch_array($result)){
        $img[$c]=$row["idpublicacion"];
        $arrid[$c]=$row["idpublicacion"];
        $c++;
    
} ?>            



            <div id="myCarousel2" class="carousel slide">
                <div class="carousel-inner">
                    
                    <div class="item active">
                        <div class="row">
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[0] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[0] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div>
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[1] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[1] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div>
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[2] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[2] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div>
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[3] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[3] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div>
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div>
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[5] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[5] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="row">
                                                        
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[6] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[6] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div>
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="row">
                                                        
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div>
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div>
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                                                        <div class="col-md-2"><a href="index.php?idp=<?php echo $arrid[4] ?>" class="thumbnail"><img class="img-responsive" src="img/foto<?php echo $img[4] ?>.jpg" style="width:150px;height:150px;" alt=""></a></div> 
                        </div>
                    </div>
                    
                </div>
                
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel2" style="background: #E01B45;" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel2" style="background: #E01B45;" data-slide-to="1"></li>
                    <li data-target="#myCarousel2" style="background: #E01B45;" data-slide-to="2"></li>
                </ol>                
            </div>

<?php
mysql_close($link);
mysql_free_result($result);
?>