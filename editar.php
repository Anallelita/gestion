<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php 
$ruta = "C:/AppServ/www/gestion/";
opendir($ruta);
$destino = $ruta.$_FILES['imagen']['name'];
echo "destino  ".$destino."<br>";
$ima=$_FILES['imagen']['name'];
copy($_FILES['imagen']['tmp_name'],$destino);


$id=$_POST['atribu'];

$servername = "localhost";
$username = "root";
$password = "joseduran";
$dbname = "sistema_gestion";

        $nombre= $_POST ['nombre'];
		$contraseña= $_POST ['contraseña'];
		$Tipo= $_POST ['Tipo'];
		

$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$tildes = $link->query("SET NAMES 'utf8'"); 

$result = mysqli_query($link, "UPDATE usuario SET nombre='$nombre', contraseña='$contraseña', Tipo='$Tipo', imagen='$ima' Where id='$id'");
  
  mysqli_close($link);
  
  header ("Location:usuarioS1.php");
  ?>
<body>
</body>
</html>