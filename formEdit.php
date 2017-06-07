<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="sass/css/sty.css">

<title>Documento sin título</title>
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

<div class="contenedor-formulario">
  <div class="wrap">
    <form action="editar.php" class="formulario" name="formulario_registro" method="POST" enctype="multipart/form-data">
      <div>  
        <div class="input-group">
          <input type="text" id="nombre" name="nombre"  style="text-align:center" value=<?php echo $fila['nombre']; ?>>
          <label class="label" for="nombre">Nombre:</label>
        </div>
        
        <div class="input-group">
          <input type="password" id="pass" name="contraseña" style="text-align:center"value= <?php echo $fila['contraseña']; ?>>
          <label class="label" for="pass">Contraseña:</label>
        </div>
        <div class="input-group">
          <input type="password" id="pass2" name="contrase" style="text-align:center" value= <?php echo $fila['contraseña']; ?>>
          <label class="label" for="pass2">Repetir Contraseña:</label>
        </div>
         
        <div class="input-group">
          <input type="text" id="tipo" name="Tipo" style="text-align:center" value= <?php echo $fila['Tipo']; ?>>
          <label class="label" for="nombre"><br>Tipo de usuario:</label>
        </div>
          
          <div class="input-group">
          
        
          <label class="label" for="tofo">Foto:</label><br/>
         
        </div>
          <div >
          
         <input  type="file"  name="imagen" style="display: none" />  
                     
<input type="button" value="Cambiar" onclick="imagen.click();">


        </div><br/>
        
        
        <div class="input-group checkbox">
          <input type="checkbox" name="terminos" id="terminos" value="true">
          <label for="terminos">Acepto los Terminos y Condiciones</label>
        </div>
         <input type="hidden" name="atribu" value= <?php echo $id ?> />
        <input type="submit" id="btn-submit" value="GUARDAR" name="B1">
      </div>
    </form>
  </div>
</div>
<script src="js/llol.js"></script> 
</body>
</html>
