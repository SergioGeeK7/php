<?php 


session_start();


$oldusuario=$_SESSION["oldusuario"];


$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$permisos=$_POST['permisos'];


$conexion=mysql_connect("localhost","sergiohack","password");

echo "$oldusuario".$_SESSION["oldusuario"];

mysql_select_db("Favoritos",$conexion);

mysql_query("UPDATE usuarios SET Usuario='$usuario' , Contrasena='$contrasena' , Nombre='$nombre' , Apellido='$apellido' , Edad='$edad' , Permisos='$permisos' WHERE Usuario='$oldusuario'  ");



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