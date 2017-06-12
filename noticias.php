<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?PHP
	include("config.php")
?>

<?
		$resultado =mysql_query("SELECT * FROM  noticias ORDER BY id ASC LIMIT 0,10");
	while($row=mysql_fetch_array($resultado))
	{
		echo "$row[titulo]"; echo"<br>"; echo "$row[noticia]"; echo "<br>"; echo "$row[fechas]";
		echo"<br>"; ?>
		
  <img src="<?php echo $row[foto]?>" width="400px" height="400px"/>

		<?
	}
	?>
</body>
</html>