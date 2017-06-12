<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor="#BAD4DF">
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h1 align="center">Subir PDF</h1>
            <form method="post" action="" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td width="200"><label><h4>Titulo</h4></label></td>
                        <td><input type="text" name="titulo"></td>
                    </tr>
                    <tr>
                        <td width="200"><label><h4>Descripcion</h4></label></td>
                        <td><textarea name="descripcion" ></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input  type="submit" value="--------SUBIR--------" name="subir" ></td>
                        <td><a href="lista.php"><h3 align="center">VER PDF</h3></a></td>
                    </tr>
                </table>
            </form>            
        </div>
    </body>
</html>
