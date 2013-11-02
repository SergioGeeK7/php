<?php 

session_start();

$utc =date("U"); //SEGUNDOS QUE HA PASADO DE LA HERE UNIX 1970
$ano= date("Y"); // ANO
$mes = date("m");
$dia = date("d");
$hora = date("G");
$minuto = date("i");
$segundo= date("s");

$usuariolog= $_SESSION['usuario'];  // ESTAS VAIRBLES SIEMPRE LAS TRAERAN DE LA PAG PRINCIPAL $_SESSION['usuario']
$contrasenalog= $_SESSION['contrasena'];   // $_SESSION['contrasena']


// @ip para evitar WARNINGS

@$ip = getenv("REMOTE_ADDR");
$navegador = $_SERVER['HTTP_USER_AGENT'];






$conexion=mysql_connect("localhost","sergiohack","password");


mysql_select_db("favoritos",$conexion);

$peticion=mysql_query("INSERT INTO logs (Utc,Ano,Mes,Dia,Hora,Minuto,Segundo,IP,Navegador,Usuario,Contrasena) VALUES 
	('$utc','$ano','$mes','$dia','$hora','$minuto','$segundo','$ip','$navegador','$usuariolog','$contrasenalog')",$conexion);

if (!$peticion) {
	echo("ha ocurrido un error ".mysql_error());
}

mysql_close($conexion);




 ?>