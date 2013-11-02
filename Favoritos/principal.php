<?php 

include("log.php");  // SE INCLUYO Y EJECUTO TODO LO DE ESTE ARCHIVO session_start la tiene el log.php


//session_start();  // inicamos la sesion para coger las variables

// llamamos las variables para ver si las cogio


echo("Tu Usuario es ".$_SESSION["usuario"]."<br>Tu contrasena es ".$_SESSION["contrasena"]);


echo "<br> pulsa <a href='logout.php'> aqui</a> para cerrar tu seccion </br>";



$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


// crear conexion 

$conexion=mysql_connect("localhost","sergiohack","password");


// establecer una consulta
mysql_select_db("Favoritos",$conexion);
$consulta = mysql_query("SELECT * FROM favoritos WHERE Usuario='$usuario' AND Contrasena='$contrasena'");



// ejecutar la consulta

//--ia
// imprimir la consulta

// width 100% se estira el 100% de lo que de el navegador. como este la ventana
echo("


<table border='1' width='100%'>    

<tr>

<td>Titulo </td>
<td>Direccion </td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
<td>  </td>
<td>  </td>
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
<td>  <a href='eliminarfavorito.php?titulo=".$fila["Titulo"]."&direccion=".$fila["Direccion"]."&categoria=".$fila["Categoria"]."&comentario=".$fila["Comentario"]."&valoracion=".$fila["Valoracion"]."'>   Eliminar  </a>  </td>


<td><a href='formularioactualizar.php?titulo=".$fila["Titulo"]."&direccion=".$fila["Direccion"]."&categoria=".$fila["Categoria"]."&comentario=".$fila["Comentario"]."&valoracion=".$fila["Valoracion"]."'> Actualizar </a></td>
</tr>


";

 //  echo $fila["Titulo"].$fila["Direccion"].$fila["Categoria"].$fila["Comentario"].$fila["Valoracion"];


}


// añadir un registro

echo("<tr>  
<form action='agregarfavorito.php' method='POST'>

<td>  <input type='text' name='titulo'> </td>
<td>  <input type='text' name='direccion'> </td>
<td>  <select name='categoria'> 
<option value='salud'>Salud</option>
<option value='trabajo'>trabajo</option>
<option value='Hobby'>Hobby</option>
<option value='amor'>amor</option>
<option value='otros'>otros</option>
 </td>

<td> <input type='text' name='comentario'> </td>
<td> <input type='text' name='valoracion'> </td>

<td> <input type='submit' > </td>
<td> </td>


	</tr>");



echo "</table>";


// cerrar la conexion

mysql_close($conexion);


////////////////////////Socializo///////////////////////////////////////////////////////////////////////////////////



sugerir("Hobby");
sugerir("otros");
sugerir("trabajo");
sugerir("salud");

function sugerir($cate){


echo "Algunos Links que quizas te puedan interesar de $cate";


$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("favoritos",$conexion);

// ORDER BY RANDOM ORDENAR ALEATORIAMENTE LIMIT 3 SOLO MOSTRARA 3 rand
$consulta=mysql_query("SELECT * FROM favoritos WHERE Usuario!='".$_SESSION['usuario']."' AND Categoria='$cate'
	ORDER BY RAND() LIMIT 3",$conexion);


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

}

 ?>