<?php 

// abre la conexioin servidor usuario contraseña
$conexion = mysql_connect("localhost","sergiohack","password");

// si conexion falla
if ($conexion) {
	echo("lo he logrado <br>");

}else{
	die("no he logrado conectarme".mysql_error());
}

// selecciona la base de datos con la que queremos trabajar
mysql_select_db("agenda",$conexion);

// realizar la peticion
$peticion= mysql_query("SELECT * FROM miagenda"); // seleccionar todo de la tabla  -->  miagenda

// mysql_fech_array == este comando va a ir lina por linea almacenando todo lo que le de la base de datos dentro de una matriz
while ($fila=mysql_fetch_array($peticion)) {    // listar base de datos y que devuelva tantos valores como tenga almacenados
// $fila varible del while ["columnadebasededatos"]
echo $fila["Nombre"]." ".$fila["Apellido"]." ".$fila["Edad"]." ".$fila["Telefono"];   
echo("<br>");
}






mysql_close($conexion);



?>