<?php
	//Conectar con la base de datos
	@$link=mysql_connect("localhost","root",""); //conectando con el servidor
	mysql_select_db("vzlaboxfitness") or die("Error no existe la base de datos"); //conectando con la base de datos
	mysql_set_charset("UTF8");
?>