<?php 

session_start();

$usuario=$_SESSION["usuario"];
$contrasena=$_SESSION["contrasena"];


$titulo=$_GET["titulo"];
$direccion=$_GET["direccion"];
$categoria=$_GET["categoria"];
$comentario=$_GET["comentario"];
$valoracion=$_GET["valoracion"];


// creo la conexion


$conexion=mysqli_connect("localhost","sergiohack","password");

// selecciono la db
mysqli_select_db($conexion,"Favoritos");
// ejecuto la consulta
$peticion=mysqli_query($conexion,"SELECT * FROM favoritos WHERE Usuario='$usuario' AND 
	Contrasena='$contrasena' AND Direccion='$direccion' AND
	 Comentario='$comentario' AND Categoria='$categoria'");


echo("

<table border='2' width=100% >

<tr>

<td> Titulo </td>
<td> Direccion</td>
<td>Categoria </td>
<td> Comentario</td>
<td> Valoracion</td>
<td> </td>
</tr>

");

while ($fila=mysqli_fetch_array($peticion)) {
// una nueva fila con columnas
	// crearemos formularios
	// value = valorpordefecto
echo("

<tr><form action='actualizarfavorito.php' method='POST'>

<td> <input type='text' name='titulo' value='".$fila["Titulo"]."'</td>
<td> <input type='text' name='direccion' value='".$fila["Direccion"]."'</td>
<td> 
<select name='categoria' >

<option value='salud'>Salud</option>
<option value='trabajo'>trabajo</option>
<option value='Hobby'>Hobby</option>
<option value='amor'>amor</option>
<option value='otros'>otros</option>
<option value='".$fila["Categoria"]."' selected>".$fila["Categoria"]." </option>
 </select>

</td>
<td> <input type='text' name='comentario' value='".$fila["Comentario"]."'</td>
<td> <input type='text' name='valoracion' value='".$fila["Valoracion"]."'</td>
<td> <input type='submit'> </td>
</form>
</tr>

")	;


}

echo("</table>");


$_SESSION['titulo'] = $titulo;



mysqli_close($conexion);





 ?>