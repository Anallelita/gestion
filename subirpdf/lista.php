<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor="#D3D3D3">
       <h1 align="center">TODOS LOS PDF</h1>
        <table border="1" align="center" width="800" bgcolor="#E1D6D6">
            <tr>
                <td><p><h3 align="center">TITULO</h3></p></td>
                <td><h3 align="center">DESCRIPCION</h3></td>
                <td><h3 align="center">TAMAÑO</h3></td>
                <td><h3 align="center">TIPO</h3></td>
                <td><h3 align="center">NOMBRE</h3></td>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['tamanio']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
            </tr>
                
          <?php  } ?>
            
        </table>
    </body>
</html>
