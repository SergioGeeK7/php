<?php 

session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


// conexion

$conexion=mysql_connect("localhost","root","");

// preparar consulta
mysql_select_db("favoritos",$conexion);


//mysql_query("SELECT * FROM favoritos WHERE Nombre='$nombre' AND Contrasena='$contrasena'     ",$conexion );

$peticion=mysql_query("SELECT * FROM usuarios",$conexion);

//repasar los resultados

while ($fila=mysql_fetch_array($peticion)) {

$usuariobasedatos= $fila['Usuario'];
$contrasenabasedatos=$fila["Contrasena"];
$permisosenbasedatos=$fila['Permisos'];
if ($usuario == $usuariobasedatos && $contrasena == $contrasenabasedatos) {
	// si el resultado es positivo

// pasaran a ser variables de session para utilizarlos en otras paginas 
$_SESSION['usuario']= $usuario;
$_SESSION['contrasena']=$contrasena;
$_SESSION['permisos']=$permisosenbasedatos;

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



}else{
	echo "Usuario que usted metio es incorrecto";


}

	
}







// cerrar la base de datos

 ?>


