<?php 

session_start();  // inicamos la sesion para coger las variables

$codigo= $_SESSION['permisos'];

if ($codigo == 1) {


echo "Pulsa <a href='verlogs.php'> Aqui </a>para ver los logs";


echo "Pulsa <a href='gestionusuarios.php'> Aqui </a>para ver los Gestionar usuarios";


}else{
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
}
 ?>