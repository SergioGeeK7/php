<?php 

// trabajaremos seciones... en todas las paginas a excepcion de la pagina principal

session_start();

// creare variable de sesion usuario

/*
$_SESSION["usuario"] = "Sergio Andres";
$_SESSION["contrasena"] ="nomelase";
*/
// una de las formas mas primitivas de llevar una pagina a otra, una etiqueta meta refresh

 // isset(var) si esta seteada si existe esto 

if (isset($_SESSION['usuario'])) {
	
echo("


<html>
<head>
	<meta http-equiv ='REFRESH' content='0;url=principal.php'  >
	<title></title>

</head>
<body>

</body>
</html>




	");


}else {





echo("


<html>
<head>
	<meta http-equiv ='REFRESH' content='0;url=formulariologin.php'  >
	<title></title>

</head>
<body>

</body>
</html>




	");

}

 ?>