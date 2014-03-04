<?php 


$conexion=mysql_connect("localhost","sergiohack","password");

if (!$conexion) {
	echo mysql_error();
}


mysql_select_db("agenda",$conexion);

$peticion=mysql_query("UPDATE miagenda SET Edad='99' WHERE Nombre='SERGIO' AND Apellido='ANDRES'",$conexion) ; // where es a quien, sino estableceria la edad de todos a 24



mysql_close($conexion);



?>