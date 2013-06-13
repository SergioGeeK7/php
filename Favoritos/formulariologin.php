<html>
<head>
	<title>Formulario de Registro</title>
</head>
<body>

<!-- login .php para saber si el login es valido -->

<table border='1' width='100%'>

<tr>
<td>

<form action='login.php' method='POST'>


<input type='text' name='usuario' value='introduce tu usuario' width='50%'></td>
</td>
</tr>



<tr>
<td>	
<input type='text' name='contrasena' value='instroduce tu contrasena' width='50%'>
</td>
</tr>


<tr>
<td>	
<input type='submit'> 
</td>
</tr>

</form>

</table>

Aun no estas resgistrado ??? Pulsa <a href="formularioalta.php">AQUI</a>





</body>
</html>


<?php 


echo "Algunos Links que quizas te puedan interesar de ";


$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("favoritos",$conexion);

// ORDER BY RANDOM ORDENAR ALEATORIAMENTE LIMIT 3 SOLO MOSTRARA 3 rand
$consulta=mysql_query("SELECT * FROM favoritos ORDER BY RAND() LIMIT 3",$conexion);


if (!$consulta) {
	echo " ".mysql_error();
}


echo("


<table border='1' width='100%'>    

<tr>

<td>Titulo </td>
<td>Direccion </td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>

</tr>

	");


while ($fila=mysql_fetch_array($consulta)) {  // lo que hace es convertir la consulta que devuelve la base de datos en una matriz
	// TODO LO QUE PONGA DESPUES DE php? con variables METODO GET

echo"

<tr>

<td>".$fila["Titulo"]."</td>
<td>".$fila["Direccion"]." </td>
<td>".$fila["Categoria"]."</td>
<td>".$fila["Comentario"]."</td>
<td>".$fila["Valoracion"]."</td>



";

 //  echo $fila["Titulo"].$fila["Direccion"].$fila["Categoria"].$fila["Comentario"].$fila["Valoracion"];


}


echo "</table>";
mysql_close($conexion);






 ?>