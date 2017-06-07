<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<link rel="stylesheet" href="fonts.css">
<body >
<style>
#tabla_facturas{
	border-radius:1px;
	
width:1000px;
text-align: center;
overflow:hidden;

}
#tabla_facturas tr{
border-bottom: 5px solid #C0C0C0;
}
#tabla_facturas button{
background-color: #fff;
color:#7AC143;
border:2px solid #7AC143;
width:100%;
height:100%;

}
.tabla_facturas_archivo{
width:50%;
padding-top:20px;
padding-bottom:20px;
text-align: center;
padding-center: 5px;
}
.tabla_facturas_ver{
 
       
}
.tabla_facturas_descargar{

}
.tabla_facturas_imprimir{

}
</style>
 
<table width="100%" id="tabla_facturas">
<tr><th style="text-align:left;padding-left:70px;padding-bottom:20px;"><h3 align="center">Nombre del Usuario</h3></th>
<th style="text-align:left;padding-left:40px;padding-bottom:20px;"><h3 align="center">Ver</h3></th>
<th style="text-align:left;padding-left:40px;padding-bottom:20px;"><h3 align="center">Editar</h3></th>
<th style="text-align:left;padding-left:40px;padding-bottom:20px;"><h3 align="center">Eliminar</h3></th></tr>

<?php 

$servername = "localhost";
$username = "root";
$password = "joseduran";
$dbname = "sistema_gestion";

function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
	 ?>
<tr>
<td class="tabla_facturas_archivo"><?php echo $resultados['nombre']?></td>
<td class="tabla_facturas_ver" ><form action="datos.php" method="post">
<input type="hidden" name="tod" value= <?php echo $resultados['id'] ?> />
<button class="icon-users" button type="submit">
</button></td></form>

<td class="tabla_facturas_descargar" height="50"><form action="formEdit.php" method="post" >
<input type="hidden" name="variab" value= <?php echo $resultados['id'] ?> />
<button class="icon-pencil" button type="submit">
</button></td></form>

<td class="tabla_facturas_imprimir" height="50"><form action="una.php" method="post">
<input type="hidden" name="variable1" value= <?php echo $resultados['id'] ?> />
<button class="icon-trash" button type="submit" >
</button></td></form>
</tr>
<?php 
}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM usuario");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);
?>

</table>
</body>
</html>