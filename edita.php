<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel=stylesheet href="stile.css" type="text/css" />
</head>
<body>
<?php
$id=$_POST['variab'];

$servername = "localhost";
$username = "root";
$password = "joseduran";
$dbname = "sistema_gestion";

$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$tildes = $link->query("SET NAMES 'utf8'"); 
$result = mysqli_query($link, "SELECT * FROM usuario where id = '$id'");
$fila = mysqli_fetch_array($result);
mysqli_free_result($result);
mysqli_close($link);
?>
<div id="formul"> 

    <h1>Formulario de Usuario.</h1> 
<br />
<br />
    <form method="POST" action="editar.php" name="mensaje_f" enctype="multipart/form-data">  
      
      
        <p>Nombre de usuario: <br />  
        <input class="campos" type="text" name="nombre" value= <?php echo $fila['nombre']; ?>></p>  
         
        <p>Contraseña: <br />  
        <input class="campos" type="text" name="contraseña" value= <?php echo $fila['contraseña']; ?>></p>  
         
        <p>Repetir Contraseña: <br />  
        <input class="campos" type="text" name="contrase" value= <?php echo $fila['contraseña']; ?>></p>  
         
        <p>Tipo de usuario:<br />  <input class="campos" type="text" name="Tipo" value= <?php echo $fila['Tipo']; ?>></p>  
       </p>  
         
        <p>Imagen:<br /> 
        <input class="campos" type="text" name="imagen" size="20"
         value= <?php echo $fila['Imagen']; ?>></p> 
         
         

        <div id="b_reset">  
        <input class="boton" type="reset" value="Restablecer" name="B2"> 
        
        <input type="hidden" name="atribu" value= <?php echo $id ?> />
        </div> 
         
        <div id="b_submit"> 
        
        <input class="boton" type="submit" value="Guardar cambios" name="B1"> 
        </div> 
         
    </form>  
   
</div>     
</body>
</html>