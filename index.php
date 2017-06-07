<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<LINK REL="stylesheet" TYPE="text/css" HREF="form.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio de sesion</title>
</head>

<body>

 <h1>Sistema de Gestion Ambiental</h1>
  <fieldset>
<form id="form" method="POST" ACTION="control.php" onSubmit="return validacion();" >
<BR><BR>
 
<input type="text" class="input" name="usuario" placeholder="usuario" id="usuario"/>
<BR> 
<input type="password" class="input" name="clave" placeholder="contraseña" id="clave"/>
<BR>
<input type="submit" class="loginbutton"  value="INGRESAR" />
</form>
<a href="http://localhost/formulario.php">Se me olvido la contraseña</a> </fieldset>

</body>
</html>