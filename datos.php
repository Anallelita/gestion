<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8">
   <title>Mostrar Ventane Modal de forma Automático</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <script>
      $(document).ready(function()
      {
         $("#v1").modal("show");
      });
    </script>
</head>
<body>
<?php
$id=$_POST['tod'];

$servername = "localhost";
$username = "root";
$password = "joseduran";
$dbname = "sistema_gestion";

?>
<a href="usuarios1.php"  data-toggle="modal" ></a>
   <div class="modal fade" id="v1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="location.href = 'usuarios1.php'">&times;</button>
              <h3>Usuario:</h3>
           </div>
           <div class="modal-body">
              <h4> <?php
	 
function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
	echo "---------------------------------------------<br/>";
echo "Nombre: ".$resultados['nombre']."<br/><br/> ";
echo "contraseña: ".$resultados['contraseña']."<br/><br/>";
echo "Tipo: ".$resultados['Tipo']."<br/><br/>";
echo "Id: ".$resultados['id']."<br/><br/>";
$resul=$resultados['Imagen'];

 echo "<img src='$resul'>";


echo "---------------------------------------------<br/>";
}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM usuario where id = '$id'");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);
?>
</h3></h4>
                
       </div>
           <div class="modal-footer">
          <a href="usuarios1.php" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
      </div>
   </div>
</div>

</body>
</html>