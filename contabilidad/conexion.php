<?
	mysql_connect("localhost","root","root") or die("<script language='JavaScript' type='text/javascript'>alert('No se puede Conectar a la base de datos');</script>");
	$baseDeDatos = mysql_select_db("contabilidad");
	if($baseDeDatos == NULL){
		mysql_query("CREATE DATABASE  `contabilidad` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;");
	}
?>