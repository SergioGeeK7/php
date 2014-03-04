<?php 


session_start();
//recuperar la informacion de la url y convertirlas en variables de php
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

// recuperar get de la url
$titulo=$_GET['titulo'];
$direccion=$_GET['direccion'];
$categoria=$_GET['categoria'];
$comentario=$_GET['comentario'];
$valoracion=$_GET['valoracion'];

$conexion = mysql_connect("localhost","sergiohack","password");
mysql_select_db("favoritos",$conexion);


mysql_query("DELETE FROM favoritos WHERE Usuario='$usuario' AND Contrasena='$contrasena' AND Titulo='$titulo' AND 
	Direccion='$direccion' AND Comentario='$comentario'",$conexion);


mysql_close($conexion);

// regresar a la tabla


echo("

<html>
<head>

	<meta http-equiv='REFRESH' content='0;url=principal.php'>  
	<title></title>
</head>
<body>

</body>
</html>





	");



 ?>