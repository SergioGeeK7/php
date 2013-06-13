<?php 



session_start();


$usuario=$_GET['usuario'];
$contrasena=$_GET['contrasena'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$edad=$_GET['edad'];
$permisos=$_GET['permisos'];


$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("favoritos",$conexion);


mysql_query("DELETE FROM usuarios WHERE Usuario='$usuario'",$conexion);





echo("

<html>
<head>

	<meta http-equiv='REFRESH' content='0;url=gestionusuarios.php'>  
	<title></title>
</head>
<body>

</body>
</html>





	");


mysql_close($conexion);










 ?>