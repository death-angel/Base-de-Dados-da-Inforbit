<?php
	include('ligacao_bd.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inforbit - ... - Inserir Equipamentos</title>
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
			<td>Tipo de Equipamento:</td>
			<td><input type="text" name="tipo"></td>
		</tr>
		<tr>
			<td></td>
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
	//codigo php
	if(ISSET($_POST['submit'])){
		$tipo_equipamento = $_POST['tipo'];
		$sql = "INSERT INTO equipamentos(nome) VALUES ('$tipo_equipamento')";
		$inserido = mysql_query($sql) or die(mysql_error());
		if($inserido){
			echo "Inserido com sucesso\n";
		}
		mysql_close($conn);
	}
?>