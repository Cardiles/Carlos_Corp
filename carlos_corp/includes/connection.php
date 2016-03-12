<?php
	require("constants.php");
	//1. create a database conection
	$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	if (!$connection) {
	     die("Conexion a BASE DE DATO FALLO: " . mysql_error());
	 }
	   
  	//2. Select a Database to use
	$db_select = mysql_select_db(DB_NAME,$connection);
	if (!$db_select) {
		die ("Conexion a BASE DE DATO FALLO: " . mysql_error());
	}
?>