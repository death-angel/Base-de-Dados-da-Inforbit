<?php
	include('ligacao_bd.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inforbit- ... - Inserir Marcas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
<div id="wrapper">
  <div id="header">
  </div>
  <?php
	//menu
  ?>
  <div id="content"> 
	<table width='900 px' border="0" align="center">
	<form action="#" method="POST">
		<tr>
			<td>Nome:</td>
			<td><input type="text" name="nome"><br></td>	
		</tr>
		<tr>
		<td>
		</td>
		<td><input type="submit" name="submit" value="Inserir"></td>
		</tr>
	</form>
	</table>
  </div>
  <div id="footer"> Inforbit&#174 (Resende) - 2015 </div>
</div>
</body>
</html>
<?php
	if($_ISSET($_POST['submit']){
		$nome = $_POST['nome'];
		$sql = "INSERT INTO marca '.
		'(nome) '.
		'VALUES ($nome)";
		$inserido = mysql_query( $sql, $conn );
		if($inserido){
			echo "Inserido com sucesso\n";
		}
	mysql_close($conn);
?>