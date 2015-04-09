<?php
	$servidor = "localhost";
	$username = "root";
	$password = "";
	$dbnome = "garantia";

	// criar conexão
	$conn = mysql_connect($servidor, $username, $password) or die(mysql_error());
	mysql_select_db($dbnome);
?>