<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "joseduran";
$dbname = "sistema_gestion";


$id=$_POST['variable1'];
$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$tildes = $link->query("SET NAMES 'utf8'"); 
$result = mysqli_query($link, "delete from usuario where id = '$id'");

mysqli_close($link);

if($result){
	
 header ("Location:usuarios1.php");
	
}else{echo "usuario no eliminado";}


?>
</body>
</html>