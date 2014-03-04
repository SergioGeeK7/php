<?php 

$conexion = mysql_connect("localhost","sergiohack","password");

if ($conexion) {
	echo("lo habeis logrado <br>");
}else{
die("sorry papi, hubo un error".mysql_error());
}

mysql_select_db("agenda",$conexion);

$peticion= mysql_query("SELECT * FROM miagenda WHERE Nombre='MIGUEL' ");

# SLECCIONA CUALQUIERELEMENTO DELATABLA miagenda DONDE columnanombre = "miguel"

while ($fila=mysql_fetch_array($peticion)) {
	
echo $fila["Nombre"]." ".$fila["Apellido"]." ".$fila["Edad"]." ".$fila["Telefono"];
echo("<br>");
}





mysql_close($conexion);



?>