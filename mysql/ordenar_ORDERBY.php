<?php 

$conexion = mysql_connect("localhost","sergiohack","password");

if (!$conexion) {
	echo mysql_error();
}




mysql_select_db("agenda",$conexion);


$peticiion=mysql_query("SELECT * FROM miagenda ORDER BY Edad DESC");  // por defecto se lista de forma ascendente, menor a mayor
																 // añadir despues de eda ASC==ascendente DESC ==desendente

// seleccionar todo delatabla "miagenda" ordenar by "campoedad"

  // cada $fila == mysql_fech_array($peticion)
while ($fila=mysql_fetch_array($peticiion)) {   // mientras esto sea verdadero, osea mientras haya mas campos agregados hacer{}
	echo $fila["Nombre"]." ".$fila["Apellido"]." ".$fila["Edad"]." ".$fila["Telefono"];
	echo("<br/>");
}

echo("<p> holo  aaaaaaaaaaaaaaaaaa</p>");



mysql_close($conexion);


?>