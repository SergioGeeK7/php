<?php 


session_start();


$titulo=$_GET['titulo'];
$subtitulo=$_GET['subtitulo'];
$texto=$_GET['texto'];


echo "$titulo y $subtitulo y $texto";

$conexion=mysql_connect("localhost","sergiohack","password");


mysql_select_db("blogs",$conexion);


$peticion=  mysql_query("DELETE FROM post WHERE usuario='".$_SESSION['usuario']."' AND titulo='$titulo' AND subtitulo='$subtitulo' AND texto='$texto' ",$conexion);


if (!$peticion) {
	echo "ha ocurrido un error ".mysql_error();
}

mysql_close($conexion);


echo "<html>
<head>


	<meta html-equiv='REFRESH';content='0;url=../index.php' >
	<title></title>
</head>
<body>

</body>
</html>";







 ?>