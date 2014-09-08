<?php
	//CONEXION
	$conexion = mysql_connect('localhost','admin','developer1');
	if(!$conexion){
		die ('Ha sido imposible establecer Conexion a la BD'.mysql_error());
	}
	//SELECCIONAR BASE DE DATOS
	mysql_select_db('bd_investigacion',$conexion);
?>