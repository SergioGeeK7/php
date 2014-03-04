<?php 





// CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS  -----------------------------

// establecer ----

$conexion = mysql_connect("localhost","sergiohack","password");

// preparar ----
mysql_select_db("favoritos");

// insertar ----
  if( mysql_query("INSERT INTO usuarios (Usuario,Contrasenaa,Nombre,Apellido,Edad,Permisos) VALUES 
	('Agireso','alguna','Sergio andres','Arboleda cardona',20,1)",$conexion)){

  }else{
  	echo("ha ocurrido un error".mysql_error());
  }






// cerrar ----

mysql_close($conexion);

 ?>