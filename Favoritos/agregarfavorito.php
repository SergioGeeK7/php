<?php 

session_start();

// crear variables

$usuario = $_SESSION["usuario"];
$contrasena = $_SESSION["contrasena"];

// lo que aremos sera recuperar los datos del formulario


$addtitulo = $_POST["titulo"];
$adddireccion =$_POST["direccion"];
$addcategoria=$_POST["categoria"];
$addcomentario=$_POST["comentario"];
$addvaloracion=$_POST["valoracion"];

// ya cogimos las variables

// conexion

$conexion=mysql_connect("localhost","sergiohack","password");


mysql_select_db("favoritos",$conexion);

$peticion=mysql_query("INSERT INTO favoritos (Usuario,Contrasena,Titulo,Direccion,Categoria,Comentario,Valoracion) VALUES 
	('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')",$conexion);

if (!$peticion) {
	echo("ha ocurrido un error ".mysql_error());
}

mysql_close($conexion);


// Y regreso


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