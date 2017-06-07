<?
$link = mysql_connect("localhost","root","joseduran");
     mysql_select_db("sistema_gestion", $link);
     $myusuario = mysql_query("select nombre from usuario 
     where nombre =  '".htmlentities($_POST["usuario"])."'",$link);
     $nmyusuario = mysql_num_rows($myusuario);
     
     if($nmyusuario != 0){
          $sql = "select nombre
               from usuario
               where nombre = '".htmlentities($_POST["usuario"])."' 
               and contraseña = '".htmlentities($_POST["clave"])."'";
          $myclave = mysql_query($sql,$link);
          $nmyclave = mysql_num_rows($myclave);
          
           if($nmyclave != 0){
               session_start();
               
               
               $_SESSION["autentica"] = "SIP";
               $_SESSION["usuarioactual"] = mysql_result($myclave,0,0);
                header ("Location:modificar.html");
          }
          else{
               echo"<script>alert('La contrase\u00f1a del usuario no es correcta.');
               window.location.href=\"index.php\"</script>"; 
          }
     }else{
          echo"<script>alert('El usuario no existe.');window.location.href=\"index.php\"</script>";
     }
     mysql_close($link);
?>

