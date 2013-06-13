<?php 

$conexion=mysql_connect("localhost","root","");

if (!$conexion) {
echo "ha ocurrido un error".mysql_error();
}
// preparar una peticion

mysql_query("CREATE DATABASE escuelavirtual",$conexion);
mysql_select_db("escuelavirtual",$conexion);
// ejecutar peticion

mysql_query("CREATE TABLE estudiantes (


numerodecarnet varchar(40) NOT NULL ,
nombres varchar(40) NOT NULL,
apellidos varchar(40),
materia varchar(40),
nivel int




	)",$conexion);


mysql_query("CREATE TABLE material (


codmateria int NOT NULL ,
docente varchar(80) NOT NULL,
materia varchar(40),
material varchar(500),
tiempo_de_entrega varchar(40)




	)",$conexion);





mysql_query("CREATE TABLE calificaciones (


codalumno int NOT NULL ,
alumno varchar(80) NOT NULL,
materia varchar(40),
nivel int,
nota1 double,
nota2 double,
notafinal double,
promedio double



	)",$conexion);











//cerraremos

mysql_close($conexion);


 ?>


