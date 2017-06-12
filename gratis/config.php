<?
$link = mysqli_connect("localhost", "root", "59135913");
mysqli_select_db($link, "post");
$tildes = $link->query("SET NAMES 'utf8'");



 function quitar($str)
{
	$no_permitidos = array("'", "/", "//", "OR", "SELECT", "AND", "FROM", "*");
return str_replace($no_permitidos, "", $str);
}
?>