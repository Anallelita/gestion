<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="600" border="0" cellpadding="0" cellspacing="0" border="0" align="center">

<tr>
<td width="200" bgcolor="gray" align="center ">
<h2 align="center ">usuarios</h2>
</td></tr></table> <br>



<center>
<?php
$id=$_POST['tod'];

$servername = "localhost";
$username = "root";
$password = "joseduran";
$dbname = "sistema_gestion";

?>
<table width="600" border="0" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
	 <td width="200" bgcolor="blue" valign="top" align="center"> 
     <h3>
     <?php
	 
function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "-Nombre: ".$resultados['nombre']."<br/> ";
echo "-contraseña: ".$resultados['contraseña']."<br/>";
echo "-Tipo: ".$resultados['Tipo']."<br/>";
echo "-Id: ".$resultados['id']."<br/>";
echo "-Imagen: ".$resultados['Imagen']."<br/>";
echo "---------------------------------------------<br/>";
}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM usuario where id = '$id'");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);
?></h3>
</td>
</tr>
</table><br/>

</body>
</html>