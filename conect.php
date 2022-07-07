<?php
$conexion = mysql_connect('localhost', "olmedoal_userbd", "olmedo2012bd") 
	or die (mysql_error());
mysql_select_db("olmedoal_unik", $conexion) 
	or die ("fracaso la seleccion de la  db");
?>