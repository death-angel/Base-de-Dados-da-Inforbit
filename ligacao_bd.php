<?php
	$servidor = "localhost";
	$username = "root";
	$password = "";
	$dbnome = "garantia";

	// criar conex�o
	$conn = mysql_connect($servidor, $username, $password) or die(mysql_error());
	mysql_select_db($dbnome);
?>