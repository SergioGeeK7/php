<?php 


session_start();

$usuario=$_SESSION["usuario"];
$contrasena=$_SESSION["contrasena"];

// coger las variables $_POST
$titulo = $_POST["titulo"];
$direccion = $_POST["direccion"];
$categoria = $_POST["categoria"];
$comentario = $_POST["comentario"];
$valoracion = $_POST["valoracion"];


$oldtitle=$_SESSION['titulo'];

echo("$titulo $direccion $categoria $comentario $valoracion $usuario $contrasena $oldtitle



");
// coger la variablde de $_SESSION['titulo']





$conexion=mysql_connect("localhost","sergiohack","password");

if (!$conexion) {
	echo("error".mysql_error());
}

mysql_select_db('favoritos',$conexion);

// recuperar las variables de secion



$peticion=mysql_query("UPDATE favoritos SET Titulo='$titulo', Direccion='$direccion', Categoria='$categoria' ,
	Comentario='$comentario' , Valoracion='$valoracion' WHERE Titulo='$oldtitle'") ;


/*
$peticion=mysql_query("UPDATE favoritos SET Titulo='$titulo' , Direccion='$direccion' WHERE Titulo='$oldtitle' ",$conexion) ; 
*/


if (!$peticion) {
	echo mysql_error();
}



mysql_close($conexion);




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








 ?>