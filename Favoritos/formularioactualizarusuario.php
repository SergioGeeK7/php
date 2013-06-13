<?php 

session_start();

/*
$usuario=$_SESSION["usuario"];
$contrasena=$_SESSION["contrasena"];
*/

$usuario=$_GET['usuario'];
$contrasena=$_GET['contrasena'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$edad=$_GET['edad'];
$permisos=$_GET['permisos'];


// creo la conexion


$conexion=mysqli_connect("localhost","sergiohack","password");

// selecciono la db
mysqli_select_db($conexion,"Favoritos");
// ejecuto la consulta
$peticion=mysqli_query($conexion,"SELECT * FROM usuarios WHERE Usuario='$usuario' ");


echo("

<table border='2' width=100% >

<tr>

<td> Usuario </td>
<td> Contrasena</td>
<td>Nombre </td>
<td> Apellido</td>
<td> Edad</td>
<td> Permisos </td>
<td>  </td>
</tr>

");

while ($fila=mysqli_fetch_array($peticion)) {
// una nueva fila con columnas
	// crearemos formularios
	// value = valorpordefecto
	$_SESSION['oldusuario'] = $fila['Usuario'];
echo("

<tr><form action='actualizarusuario.php' method='POST'>

<td> <input type='text' name='usuario' value='".$fila["Usuario"]."'</td>
<td> <input type='text' name='contrasena' value='".$fila["Contrasena"]."'</td>
<td> <input type='text' name='nombre' value='".$fila["Nombre"]."'</td>
<td> <input type='text' name='apellido' value='".$fila["Apellido"]."'</td>
<td> <input type='text' name='edad' value='".$fila["Edad"]."'</td>
<td> <input type='text' name='permisos' value='".$fila["Permisos"]."'</td>
<td> <input type='submit'> </td>
</form>
</tr>

")	;


}

echo("</table>");

// fuerzo una variable de session




mysqli_close($conexion);





 ?>