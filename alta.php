
<?php 
$link = mysqli_connect("localhost", "root", "joseduran");
mysqli_select_db($link, "sistema_gestion");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente

 
	if ($link) {
		$ruta = "C:/AppServ/www/gestion/imagenes/";
opendir($ruta);
$destino = $ruta.$_FILES['imagen']['name'];
$ima=$_FILES['imagen']['name'];
echo "destino  ".$destino."<br>";
copy($_FILES['imagen']['tmp_name'],$destino);

		$nombre= $_POST ['nombre'];
		$contraseña= $_POST ['contraseña'];
		$Tipo= $_POST ['Tipo'];
		$ide= $_POST ['ide'];
		
		echo $nombre;
		echo "<br>";
		
		$resultado= mysqli_query($link, "INSERT INTO usuario VALUES ('$nombre','$contraseña','$Tipo','$ide','$ima')");

		
		if ($resultado) {
			echo "perfil almacenado. <br />";
		}
		else {

		}
		
		if (mysqli_close($link)){ 
			
		} 
		else {
			echo "error en la desconexión";
			echo "**********************************<br/>";
		}
}
header ("Location:modificar.html");

?>

