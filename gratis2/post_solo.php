


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <script type="text/javascript" src="js/comentar.js"></script>

</head>

<body>

    <!-- Navigation -->
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            
<?
				
$id=intval( quitar($_GET['n']));
	$sql=mysqli_query($link,"SELECT* FROM post WHERE id=$id" );
				$numero=mysqli_num_rows($sql);
				
				if($numero==0){
					echo"no se ha encontrado el post.";
					
				}
				else{
				$row=mysqli_fetch_array($sql);
				
?>
               
                

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><? echo $row['titulo'];   ?></a>
                </h2>
                <p class="lead">
                    <a href="index.php"><? echo $row['autor'];   ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"> </span><? echo " ".$row['dia']." de ".$row['mes']." del ".$row[anio]; ?></p>
               
              
                <img  src="<? echo $row[imagen]?>"   >
                <hr></td>
    <div  align="center">
                <p align="justify"><? echo $row['contenido'];   ?></p>
                <br>
             
                <h1 class="page-header">
                    
                    <small>COMENTARIOS</small>
                </h1>
                   
              <?
					$sql = mysqli_query($link,"SELECT * FROM comentarios WHERE post=$id");
					if(mysqli_num_rows($sql)==0){
						echo "<center>No hay comentarios</center>";
					}
               while ($row=mysqli_fetch_array($sql)){
				   ?>
                
                <div >
                	<b><? echo $row['de'];   ?></b> el <a href=""><? echo $row['fecha'];   ?></a>
                </div>
               <div class="comentario" ><? echo $row['comentario'];   ?></div>
               <br>
               <br>
               <?
				}
?>
 </span></a></div>
             <?
				}
?>
    <br>
     
     <table width="50%" >
  <tbody align="center">
    <tr align="center">
     
     <div  align="center">
     
     <FORM NAME="miFormu" ACTION="" METHOD="post"> 
     
    <input  class="coment-de #usuario "type="text" id="nombre" name=nombre placeholder="Nombre"  ><br><br>
    	
    	<input class="coment-de #email" type="email" id="email"  name="email" placeholder="Email"><br><br>
    	<input type="hidden" id="id" name="id" value="<? echo $id; ?>"><br><br>
    	<textarea class="coment-de #comentario" id="comentario" name="comentario" placeholder="Comentario"></textarea><br><br>
    	
    	
     	
     <INPUT TYPE="submit" CLASS="boton" id="" VALUE="COMENTAR"> 
</FORM>
     		
     </div>
    </tr>
  </tbody>
</table>


   <!-- jQuery -->
   <!--<script src="js/comentar.js"></script>-->
    <script src="js/jquery.js"></script> 

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
