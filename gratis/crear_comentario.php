
<?

$link = mysqli_connect("localhost", "root", "joseduran");
mysqli_select_db($link, "post");


if(isset($_REQUEST['id']) && isset($_POST['nombre']) //&& isset($HTTP_POST_VARS["comentario"])
  !=""){
	echo("paso");
//if($HTTP_POST_VARS["comentario"] != "")
//{
if($_POST['nombre'] == "")
{
$user= "anonimo";
}
else
{
$user=$_POST['nombre'];
}
	echo("repaso");


	
	
	$email=$_POST['email'];
	$post=$_REQUEST['id'];
	$comentario=$_POST['comentario'];
	
	
	
	function nombmes($mes){
 setlocale(LC_TIME, 'spanish'); 
 $nombre=strftime("%B",mktime(0, 0, 0, $mes, 1, 2000)); 
 return $nombre;
 
}  
$fecha =date("d")." de ".nombmes(date("m"))." de 20".date("y");
 
mysqli_query($link,"INSERT INTO comentarios(de, comentario, fecha, email, activo, ip, post) VALUES ('$user','$comentario','$fecha','$email','1','1.111.111.11.1','$post')");
header('Location:agragar.php?n='.$post);
	
//echo "Comentario Enviado Con Exito.<BR>Espere Unos Segundos...
	//<SCRIPT LANGUAGE="javascript"> window.location.href = getenv('HTTP_REFERER');</SCRIPT>; 
//}
//else
//{
//echo "Debe Introducir Un Comentario.";
//}
	
}

?>









