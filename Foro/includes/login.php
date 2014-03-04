<?php 

//session_destroy();
session_start();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];


$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("blogs",$conexion);


$peticion=mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'  ",$conexion);


while ($fila=mysql_fetch_array($peticion)) {
	
if ($fila['contrasena']==$contrasena && $fila['contrasena']==$contrasena) {
	
$_SESSION['login']="yes";

}



}


echo("


<html>
<head>
	<meta http-equiv ='REFRESH' content='0;url=../index.php'  >
	<title></title>

</head>
<body>

</body>
</html>




	");

// esto es una prueba y vere si me encontraras paralicutilimicuaro

 ?>