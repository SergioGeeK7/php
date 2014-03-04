<?php 


$conexion = mysql_connect("localhost","sergiohack","password"); // abre y guarda conexion
echo($conexion);
if(!$conexion){ // si conexion falla

die("sorry ha fallado la conexion ".mysql_error());

}

echo("Lo lograste <br/>");

if (mysql_query("CREATE DATABASE Agenda ",$conexion))  // peticion a la base de datos ("la peticion")  ,$laquecontienelaconexion
{

// si la operacion es correcta

	echo("se a creado la base de datos");


}else {
	echo("no se ha podido crear la base de datos por el siguiente error".mysql_error());
}












// creacion de tablas y columnas

#1. preparar peticion

mysql_select_db("Agenda",$conexion);  // seleccionar la base de datos con cual trabajar , $conexioin

// ahora que la base esta seleccionada
$sql = "CREATE TABLE MiAgenda(   
PersonaID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PersonaID) ,
Nombre varchar(15),
Apellido varchar(15) ,
Edad int,
Telefono int

) ";

// dentro de los parentesis iran las columnas

// Ejecutar la peticion

if (mysql_query($sql,$conexion)) {  // querys tienen dos parametros (queenviamos,aqueloenviamos)
 	echo("se logro");
 }else {
 	echo("no se logro".mysql_error());
 }  
   


mysql_close($conexion); // cierra conexion






?>