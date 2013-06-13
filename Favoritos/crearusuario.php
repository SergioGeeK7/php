<?php 

session_start();

$con=0;



// obtener las variables 



$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];

// comprobar si el usuario existe.


$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("favoritos",$conexion);

$peticion=mysql_query("SELECT * FROM Usuarios");


while ($fila=mysql_fetch_array($peticion)) {

if ($fila['Usuario']==$usuario) {
	
$con++;


}
	
}
mysql_close($conexion);

// si no esta repetido
if ($con==0) {
	# code...


// conexion

$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("favoritos",$conexion);


mysql_query("INSERT INTO usuarios (Usuario,Contrasena,Nombre,Apellido,Edad,Permisos) VALUES 
	('$usuario','$contrasena','$nombre','$apellido','$edad',3)   ",$conexion);



mysql_close($conexion);
}else{

echo "El Nombre de usuario Ya esta en uso";

echo("


<html>
<head>
	<meta http-equiv ='REFRESH' content='7;url=formularioalta.php'  >
	<title></title>

</head>
<body>

</body>
</html>




	");

}
 ?>