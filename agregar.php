<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="gratis/css/formblog.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="gratis/css/formblog.css">
</head>

<body bgcolor="#3B3B3B">
<form name="form1" method="post" action="publicarnoti.php" enctype="multipart/form-data">
<p>

<table 90%  align="center" bgcolor= #ABABAB>
  <tbody>
    <tr>
      <td>



<label ><h3 align="center">Título</h3>
<input name="titulo" type="text" id="titulo" size="60">
</label></p>

<p>
<label><h3 align="center">Autor</h3>
<input name="autor" type="text" id="autor" size="60">
</label></p>
<table align="center" >
  <tbody>
    <tr>
      <td align="center">Dia</td>
      <td align="center">Mes</td>
      <td align="center">Año</td>
    </tr>
    <tr>
      <td><label>
<input name="dia" type="text" id="dia" size="15">
</label></td>
      <td><input name="mes" type="text" id="mes" size="15">
</label></td>
      <td><label>
<input name="anio" type="text" id="anio" size="15">
</label></td>
    </tr>
  </tbody>
</table>
</br>
 <div align="center"><input name="foto" type="file" id="foto"></div>

<p>
<label><h2 align="center">Descripción de la noticia</h2>
<textarea name="desc" cols="60" rows="5" id="desc"></textarea>
</label></p>

</label>
</br>
<label><br>
<input class="guardar" name="guardar" type="submit" id="guardar" value="PUBLICAR" align="middle"  />
</label>


</td>
    </tr>
  </tbody>
</table>
</br>
</br>
</br>
<div>   </div>
</form>





</body>
</html>