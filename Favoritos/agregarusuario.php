<?php 


session_start();


$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$permisos=$_POST['permisos'];


$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("favoritos",$conexion);


mysql_query("INSERT INTO Usuarios (Usuario,Contrasena,Nombre,Apellido,Edad,Permisos) 
	VALUES ('$usuario','$contrasena','$nombre','$apellido','$edad','$permisos')      ",$conexion);



echo("


<html>
<head>
	<meta http-equiv ='REFRESH' content='0;url=gestionusuarios.php'  >
	<title></title>

</head>
<body>

</body>
</html>




	");




 ?>