<?php 

$contador=0;

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$foto=$_POST['foto'];
$web=$_POST['web'];
$email=$_POST['email'];


//revisar si el usuario existe

$conexion=mysql_connect("localhost","sergiohack","password");
mysql_select_db("blogs",$conexion);


$peticion=mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario'",$conexion);


while ($fila=mysql_fetch_array($peticion)) {
	

if ($fila['usuario']==$usuario) {
	
	$contador++;
	//confirm("el usuario ya esta en uso");
}


}

mysql_close($conexion);


if ($contador==0) {
	
$conexion=mysql_connect("localhost","sergiohack","password");
mysql_select_db("blogs",$conexion);

mysql_query("INSERT INTO usuarios (usuario ,contrasena ,nombre,apellido1 ,apellido2,titulo ,descripcion,foto,web,email ,permisos ) VALUES
	('$usuario','$contrasena','$nombre','$apellido1','$apellido2','$titulo','$descripcion','$foto','$web','$email','2') ",$conexion);

mysql_close($conexion);

echo "el usuario se ha creado";

echo("


<html>
<head>
	<meta http-equiv ='REFRESH' content='0;url=../index.php'  >
	<title></title>

</head>
<body>

</body>
</html>

_POST


	");




}else{

echo "lo siendo pero el usuario seleccionado ya esta en uso. 
<a href='../index.php?registro=yes'> Intensalo de nuevo !! </a>";






}









 ?>