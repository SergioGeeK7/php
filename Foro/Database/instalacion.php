<?php 



//////////////////////   CREAR LA TABLA DE USUARIOS        //////////////////////////////////////////

// establcer conexion 

$conexion=mysql_connect("localhost","sergiohack","password");

if (!$conexion) {
echo "ha ocurrido un error".mysql_error();
}
// preparar una peticion

mysql_query("CREATE DATABASE blogs",$conexion);
mysql_select_db("blogs",$conexion);
// ejecutar peticion

mysql_query("CREATE TABLE usuarios (


usuario varchar(40) NOT NULL ,
contrasena varchar(40) NOT NULL,
nombre varchar(40),
apellido1 varchar(40),
apellido2 varchar(40),
titulo varchar(120),
descripcion varchar(1500),
foto varchar(40),
web varchar(80),
email varchar(80),
permisos int



	)",$conexion);



//cerraremos

mysql_close($conexion);


//////////////////////     INSERTAR CONTENIDO DE PRUEBA EN TABLA DE USUARIOS      //////////////////////////////////////////

// establcer conexion 
$conexion=mysql_connect("localhost","sergiohack","password");

// preparar una peticion
mysql_select_db("blogs",$conexion);

// ejecutar peticion
mysql_query("INSERT INTO usuarios (usuario,contrasena,nombre,apellido1,apellido2,titulo,descripcion,foto,web,email,permisos) 
	VALUES ('sergio','password','sergio andres','arboleda','cardona','ingeniero en sisemas','soy genial','sergiandres.png','http://sergio.tk','sergiohack7@gmail.com',3)",$conexion);

//cerraremos

mysql_close($conexion);







//////////////////////     TABLA CONFIGURACION DE USUARIO      //////////////////////////////////////////


// establcer conexion 
$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("blogs",$conexion);

// preparar una peticion

mysql_query("CREATE TABLE confusuarios (

usuario varchar(40) NOT NULL ,
piel varchar(40),
respuestas varchar(40)





	) ",$conexion);

// ejecutar peticion


//cerraremos

mysql_close($conexion);






//////////////////////     CONTENIDO DE PRUEBA DE CONFIGURACION DE USUARIO      //////////////////////////////////////////






// establcer conexion 
$conexion=mysql_connect("localhost","sergiohack","password");

// preparar una peticion
mysql_select_db("blogs",$conexion);

// ejecutar peticion
mysql_query("INSERT INTO confusuarios (usuario,piel,respuestas) VALUES 
	('sergio','default','yes') ",$conexion);

//cerraremos

mysql_close($conexion);






//////////////////////   CREAR LA TABLA POST        //////////////////////////////////////////





$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("blogs",$conexion);

// preparar una peticion

mysql_query("CREATE TABLE post (

utc int NOT NULL ,
ano int ,
mes int ,
dia int ,
hora int ,
minuto int ,
segundo int ,
usuario varchar(80),
titulo varchar(140),
subtitulo varchar(200),
icono varchar(80) ,
texto varchar(4000),
imagen varchar(200),
video varchar(200),
sonido varchar(200)





	) ",$conexion);

// ejecutar peticion


//cerraremos

mysql_close($conexion);









//////////////////////  INSERTAREMOS CONTENIDO DE PRUEBA EN TABLA POST         //////////////////////////////////////////


// establcer conexion 
$conexion=mysql_connect("localhost","sergiohack","password");

// preparar una peticion
mysql_select_db("blogs",$conexion);

// ejecutar peticion
mysql_query("INSERT INTO post (utc,ano,mes,dia,hora,minuto,segundo,usuario,titulo,subtitulo,icono,texto,imagen,video,sonido) 
	VALUES 
	(0000002,2013,03,17,1700,17,07,'sergio','esto es bueno','toyo','happy','habia una vez truz, y llego un carro y pazz',
		'lalala.png','videovideo.flv','prayer.mp3') ",$conexion);

//cerraremos

mysql_close($conexion);









//////////////////////   CREAREMOS LA TABLA LOGS        //////////////////////////////////////////





$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("blogs",$conexion);

// preparar una peticion

mysql_query("CREATE TABLE logs (

utc int NOT NULL ,
ano int ,
mes int ,
dia int ,
hora int ,
minuto int ,
segundo int ,
ip varchar(80),
navegador varchar(300),
usuario varchar(80),
operacion varchar(80) 

	) ",$conexion);

// ejecutar peticion


//cerraremos

mysql_close($conexion);



//////////////////////    INSETAR CONTENIDO DE PRUEBA EN LA TABLA LOGS       //////////////////////////////////////////


// establcer conexion 
$conexion=mysql_connect("localhost","sergiohack","password");

// preparar una peticion
mysql_select_db("blogs",$conexion);

// ejecutar peticion
mysql_query("INSERT INTO logs (utc,ano,mes,dia,hora,minuto,segundo,ip,navegador,usuario,operacion) 
	VALUES 
	(0000002,2013,03,17,1700,17,07,'192.168.1.29','Chrome 2.6','sergio','operar el operando') ",$conexion);

//cerraremos

mysql_close($conexion);










//////////////////////           //////////////////////////////////////////
















//////////////////////           //////////////////////////////////////////






 ?>