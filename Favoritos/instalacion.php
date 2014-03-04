<?php


// CREAR UNA TABLA DE FAVORITOS-------------------------------------------------------------------------


// conexion--------
$conexion = mysql_connect("localhost","sergiohack","password");

if (!$conexion) {
	die("la conexion no se pudo establecer".mysql_error());
}

// crear una tabla--------
mysql_query("CREATE DATABASE favoritos",$conexion);

mysql_select_db("favoritos",$conexion);

mysql_query("CREATE TABLE Favoritos(

Usuario varchar(60) NOT NULL,    
Contrasena varchar(40) NOT NULL,
Titulo varchar(40) NOT NULL,
Direccion varchar(100) NOT NULL,
Categoria varchar(40),
Comentario varchar(200),
Valoracion int 

	) ",$conexion);


// insertar contenido en la tabla--------

//-- ya lo hice arriba en el mismo mysql_query


// cerrar la conexion--------

mysql_close($conexion);

// CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS -----------------------------

// establecer ----

$conexion = mysql_connect("localhost","sergiohack","password");

// preparar ----
mysql_select_db("favoritos");

// insertar ----
mysql_query("INSERT INTO Favoritos (Usuario,Contrasena,Titulo,Direccion,Categoria,Comentario,Valoracion) VALUES 
	('Sergio Andres','nomelase','Programador','http://www.magnateenjuegos.com','Tecnologia','Es una muy buena pagina',7)",$conexion);

mysql_query("INSERT INTO Favoritos (Usuario,Contrasena,Titulo,Direccion,Categoria,Comentario,Valoracion) VALUES 
	('Sergio Andres','nomelase','Programador','http://www.youtube.com','Videos','Es una muy buena pagina',9)",$conexion);

// cerrar ----

mysql_close($conexion);


// CREAR UNA TABLA DE USUARIO----------------------------------


// conexion--------
$conexion = mysql_connect("localhost","sergiohack","password");
// crear una tabla--------
mysql_select_db("favoritos");  // seleccionar database
mysql_query("CREATE TABLE Usuarios (

Usuario varchar(80) NOT NULL,
Contrasena varchar(40) NOT NULL,
Nombre varchar(40) NOT NULL,
Apellido varchar(80) NOT NULL,
Edad int,
Permisos int

)");



// insertar contenido en la tabla--------

//- ia lo hice arriba en el query


// cerrar la conexion--------
mysql_close($conexion);

// CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS  -----------------------------

// establecer ----

$conexion = mysql_connect("localhost","sergiohack","password");

// preparar ----
mysql_select_db("favoritos");

// insertar ----
mysql_query("INSERT INTO Usuarios (Usuario,Contrasena,Nombre,Apellido,Edad,Permisos) VALUES 
	('Agireso','alguna','Sergio andres','Arboleda cardona',20,1)",$conexion);


// cerrar ----

mysql_close($conexion);





// CREAR UNA TABLA DE LOGS-------------------------------------------------------------------





// conexion--------
$conexion = mysql_connect("localhost","sergiohack","password");
// crear una tabla--------
mysql_select_db("favoritos");  // seleccionar database
mysql_query("CREATE TABLE Logs (

Utc int,
Ano int ,
Mes int ,
Dia int ,
Hora int,
Minuto int,
Segundo int,
IP varchar(50),
Navegador varchar(100),
Usuario varchar(40),
Contrasena varchar(40)

)");



// insertar contenido en la tabla--------


//- ia lo hice arriba en el query


// cerrar la conexion--------
mysql_close($conexion);

// CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS  -----------------------------

// establecer ----

$conexion = mysql_connect("localhost","sergiohack","password");

// preparar ----
mysql_select_db("favoritos");

// insertar ----
mysql_query("INSERT INTO Logs (Utc,Ano,Mes,Dia,Hora,Minuto,Segundo,IP,Navegador,Usuario,Contrasena) VALUES 
	(00000000000,2013,05,20,1900,37,07,'192.168.1.28','Chrome 2.6','Root','password')",$conexion);


// cerrar ----

mysql_close($conexion);


?>