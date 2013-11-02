<?php 


session_start();  // inicamos la sesion para coger las variables

$codigo= $_SESSION['permisos'];

if ($codigo == 1) {
	# code...

// llamamos las variables para ver si las cogio


echo("Tu Usuario es ".$_SESSION["usuario"]."<br>Tu contrasena es ".$_SESSION["contrasena"]);


$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


// crear conexion 

$conexion=mysql_connect("localhost","sergiohack","password");


// establecer una consulta
mysql_select_db("Favoritos",$conexion);
$consulta = mysql_query("SELECT * FROM usuarios",$conexion);



// ejecutar la consulta

//--ia
// imprimir la consulta

// width 100% se estira el 100% de lo que de el navegador. como este la ventana
echo("


<table border='1' width='100%'>    

<tr>

<td>Usuario </td>
<td>Contrasena </td>
<td>Nombre</td>
<td>Apellido</td>
<td>Edad</td>
<td>Permisos</td>
<td>  </td>
<td>  </td>
</tr>

	");


while ($fila=mysql_fetch_array($consulta)) {  // lo que hace es convertir la consulta que devuelve la base de datos en una matriz
	// TODO LO QUE PONGA DESPUES DE php? con variables METODO GET

echo"

<tr>

<td>".$fila["Usuario"]."</td>
<td>".$fila["Contrasena"]." </td>
<td>".$fila["Nombre"]."</td>
<td>".$fila["Apellido"]."</td>
<td>".$fila["Edad"]."</td>
<td>".$fila["Permisos"]."</td>
<td>  <a href='eliminarusuario.php?usuario=".$fila["Usuario"]."&contrasena=".$fila["Contrasena"]."&nombre=".$fila["Nombre"]."&apellido=".$fila["Apellido"]."&edad=".$fila["Edad"]. "&permisos=".$fila['Permisos']."'>   Eliminar  </a>  </td>


<td>  <a href='formularioactualizarusuario.php?usuario=".$fila["Usuario"]."&contrasena=".$fila["Contrasena"]."&nombre=".$fila["Nombre"]."&apellido=".$fila["Apellido"]."&edad=".$fila["Edad"]. "&permisos=".$fila['Permisos']."'>   Actualizar  </a>  </td>


";

 //  echo $fila["Titulo"].$fila["Direccion"].$fila["Categoria"].$fila["Comentario"].$fila["Valoracion"];


}


// añadir un registro

echo("<tr>  
<form action='agregarusuario.php' method='POST'>

<td>  <input type='text' name='usuario'> </td>
<td>  <input type='text' name='contrasena'> </td>
<td>  <input type='text' name='nombre'> </td>
<td> <input type='text' name='apellido'> </td>
<td> <input type='text' name='edad'> </td>
<td> <input type='text' name='permisos'> </td>

<td> <input type='submit' > </td>
<td> </td>


	</tr>");



echo "</table>";


// cerrar la conexion

mysql_close($conexion);
}else{



echo "Lo Sentimos, No tienes Permisos suficientes para acceder a esta pagina";


}





 ?>