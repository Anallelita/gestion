<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--
<LINK REL="stylesheet" TYPE="text/css" HREF="form.css">-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio de sesion</title>
<style>
body{
	background-color: #999;
}
form{
	margin:180px auto;
	width:350px;
	height:259px;
	background:white;
	border-bottom:4px solid  #009;
	}
	form label{
		display:block;
		color:#FFF;
		background:#009;
		padding:12px 0;
		text-align:center;
		font-size:20px;
		font-weight: bold;
		font-family:"Comic Sans MS", cursive;
	}
form input [type="text"], input [type="password"]{
	width:230px;
	padding: 12px 40px;
	font-weight:bold;
	font-family:"Comic Sans MS", cursive;
	margin-left:18px;
	margin-bottom:10px;
	border:1px solid #009;
	text-transform:uppercase;
	-moz-transition: all 0.5s;
	
}
form input [type="text"]{
	background: url("capi1.PNG") 5px no-repeat;
}

form input [type="password"]{
	background:  url("capi2.PNG") 5px no-repeat;
}
form input [type="text"], input [type="password":focus{
	border:1px solid #333;
	background:none;
	width:290px;
	padding:12px 10px;
}
form input [type="submit"]{
	border:#009;
	color:white;
	display:inline-block;
	margin-left:18px;
	margin-bottom:10px;
	padding:8px 20px;
	border:none;
	font-weight:bold;
	
}
form input [type="submit"]:hover{
	background:#F90;
	cursor:pointer;
}

</style>
	




</head>

<body>

 <h1 align="center">Sistema de Gestion Ambiental</h1>
  <fieldset>
<form id="form" method="POST" ACTION="control.php" onSubmit="return validacion();" >

 <label for="">Iniciar Sesión</label>
 <BR> 
 <BR> 
<input type="text"  name="usuario" placeholder="usuario" id="usuario" required="required"/>
<BR> 
 <input type="password" class="input" name="clave" placeholder="contraseña" id="clave"/>
<BR>
<input type="submit" class="loginbutton"  value="INGRESAR" />
</form>


</body>
</html>