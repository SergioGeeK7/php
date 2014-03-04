<?php   



$conexion = mysql_connect("localhost","sergiohack","password");


if ($conexion) {
	echo("HA Conectado <br>");
}else {

die("no he podido conectar a la base de datos ".mysql_error());

//	echo("Error no se a podido conectar por".mysql_error());
}


mysql_select_db("agenda",$conexion); // hago la conexion con la basededatos agenda

 // dos parametros, lo que hacer ;; y donde hacerlo
mysql_query("INSERT INTO miagenda (nombre,apellido,edad,telefono) VALUES 
	('JOSE VICENTEr','ANTONIO','17','5703539')") ;

/*
mysql_query(" ");
mysql_close($conexion);
*/


?>