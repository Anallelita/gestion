
<?php 
$link = mysqli_connect("localhost", "root", "joseduran");
mysqli_select_db($link, "post");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente


 
	if ($link) {
		$ruta = "C:/AppServ/www/gestion/gratis/";
opendir($ruta);
$destino = $ruta.$_FILES['foto']['name'];
$imagen=$_FILES['foto']['name'];
echo "destino  ".$destino."<br>";
		$miniatura_ancho_maximo=900;
		$miniatura_alto_maximo=500;
		
copy($_FILES['foto']['tmp_name'],$destino);

		$titulo= $_POST ['titulo'];
		
		$contenido= $_POST ['desc'];
		
		$autor= $_POST ['autor'];
		
		$dia= $_POST ['dia'];
		$mes= $_POST ['mes'];
		$anio= $_POST ['anio'];
		
		$hora= $_POST ['hora'];
		
		
		
		$resultado= mysqli_query($link,"INSERT INTO post(titulo,  contenido, autor, imagen, dia, mes, anio, hora) VALUES('$titulo','$contenido','$autor','$imagen','$dia','$mes','$anio','$hora')");

		
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
header ("location:agregar.php");

?>









