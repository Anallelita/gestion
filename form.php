<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel=stylesheet href="stile.css" type="text/css" />

</head>

<div id="formul"> 

    <h1>Formulario de Usuario.</h1> 
<br />
<br />
    <form method="POST" action="alta.php" name="mensaje_f" enctype="multipart/form-data">  
      
      <p>IDE: <br />  
        <input class="campos" type="text" name="ide"></p>  
        <p>Nombre de usuario: <br />  
        <input class="campos" type="text" name="nombre"></p>  
         
        <p>Contraseña: <br />  
        <input class="campos" type="text" name="contraseña"></p>  
         
        <p>Repetir Contraseña: <br />  
        <input class="campos" type="text" name="contrase"></p>  
         
        <p>Tipo de usuario:<br />  <input class="campos" type="text" name="Tipo"></p>  
       </p>  
          <label for="imagen">Imagen:</label> 
  <input id="imagen" name="imagen"  type="file" />
         
         

        <div id="b_reset">  
        <input class="boton" type="reset" value="Restablecer" name="B2"> 
        </div> 
         
        <div id="b_submit"> 
        <input class="boton" type="submit" value="Guardar..." name="B1"> 
        </div> 
              
    </form>  




</div>     
     
</body>
</html>
