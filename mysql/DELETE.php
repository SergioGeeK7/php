<?php 

$conexion = mysql_connect("localhost","sergiohack","password");


mysql_select_db("agenda",$conexion);

mysql_query("DELETE FROM miagenda WHERE Nombre='MIGUEL' AND Apellido='SANCHES' ");



mysql_close($conexion);






?>