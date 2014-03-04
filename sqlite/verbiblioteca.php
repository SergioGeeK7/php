<?php

echo "<table border='1'> <tr> <td> Artista </td> <td> Ano </td> <td> Disco </td> </tr>    ";

$conexion = sqlite_open("bibliotecasqlite.db");

$consulta = "SELECT * FROM Discos WHERE Artista='U2';";

$resultado = sqlite_query($conexion,$consulta); // en la conexion habierta voy a selecciona la consulta realizada

// toda la base de datos a pasado a estar en una matriz asociativa dentro de $consulta

while ($fila=sqlite_fetch_array($resutado)) {  // donde siempre que se de una condicion se devolvera un resutado
	//echo $fila["Artista"]." ".$fila["Disco"]." ".$fila["Ano"]."<br> ";  // maquetaremos para meter esta info en la tabla

echo "<tr> <td>".$fila["Disco"]."</td>  <td>".$fila["Artista"]."</td> <td>".$fila["Ano"]."</td>  </tr>";

}

echo("</table>")

sqlite_close($conexion);

?>