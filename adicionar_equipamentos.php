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
			<td>Marca:</td>
			<td><select name="id_marca">
					<?php
						$query = "SELECT * FROM marca";
						$result = mysql_query($query) or die(mysql_error());
						while($row = mysql_fetch_array($result)){    
							?>
								<option value="<?php echo $row['id'];?>"><?php echo $row['nome'];?></option>
							<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Modelo</td>
			<td><input type="text" name="modelo"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="inserir" value="Inserir"></td>
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
?>