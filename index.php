<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
  </head>
<!--
<LINK REL="stylesheet" TYPE="text/css" HREF="form.css">-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio de sesion</title>


</head>

<body>










<div class="my-content" >
        <div class="container" > 

            <div class="row">
              <div class="col-sm-12" >
                  <h1><strong>Sistema de Gestión Ambiental</strong></h1>
                  <div class="mydescription">
                    <p>Ingresa al sitio </p>
                  </div>
              </div>
            </div>

            <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                      <div class="myform-top">
                          <div class="myform-top-left">
                            <h3>Inicia Sesión</h3>
                              <p>Digita tu usuario y contraseña:</p>
                          </div>
                          <div class="myform-top-right">
                            <i class="fa fa-key"></i>
                          </div>
                      </div>
                      <div class="myform-bottom">
                        <form id="form" method="POST" ACTION="control.php" onSubmit="return validacion();" >
                          <div class="form-group">
                              <input type="text" name="usuario" placeholder="Usuario..." class="form-control" id="usuario" required="required">
                              
                             
                          </div>
                          <div class="form-group">
                              <input type="password" name="clave" placeholder="Contraseña..." class="form-control" id="clave">
                              
                          </div>
                         <button type="submit" class="mybtn" value="INGRESAR">Entrar</button>
                          
                          
                        </form>
                      </div>
                  </div>
            </div>
 
            </div>

        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
<!-- <h1 align="center">Sistema de Gestion Ambiental</h1>
  <fieldset>
<form id="form" method="POST" ACTION="control.php" onSubmit="return validacion();" >

 <label for="">Iniciar Sesión</label>
 <BR> 
 <BR> 
<input type="text"  name="usuario" placeholder="usuario" id="usuario" required="required"/>
<BR> 
 <input type="password" class="input" name="clave" placeholder="contraseña" id="clave"/>
<BR>
<input type="submit" class="loginbutton"  value="INGRESAR" align="center" />
</form>
-->

</body>
</html>