<?php 


session_start();

$utc=$_POST['utc'];
$titulo=$_POST['titulo'];
$subtitulo=$_POST['subtitulo'];
$texto=$_POST['contenido'];


$utc2=$_SESSION['utc'];
$utc3=$_GET['utc'];

echo "$utc $utc2 $utc3";


$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("blogs",$conexion);


mysql_query("UPDATE post SET titulo='$titulo', subtitulo='$subtitulo', texto='$texto' WHERE utc='$utc' ",$conexion);



mysql_close($conexion);




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









 ?>