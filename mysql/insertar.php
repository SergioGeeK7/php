<?php

$conexion = mysql_connect("localhost","sergiohack","password");

// si conexion falla
if ($conexion) {
	echo("lo he logrado <br>");

}else{
	die("no he logrado conectarme".mysql_error());
}


mysql_select_db("agenda",$conexion);

mysql_query("INSERT INTO miagenda (nombre,apellido,edad,telefono) VALUES ('SERGIO','ANDRES','20','5703940')  ");


mysql_close($conexion);

?>