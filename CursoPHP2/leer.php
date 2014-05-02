<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">






</body>
</html>

<?php
$conexion = mysqli_connect("localhost","root","","preguntasyrespuestas");

//mysqli_select_db($conexion,"preguntasyrespuestas");

//$resultado =$db->query("SELECT * FROM pvy;");

$resultado = mysqli_query($conexion,"SELECT * FROM pyr");

while($fila = mysqli_fetch_array($resultado)){
    echo ("  <tr><td>".$fila["pregunta"]."</td> <td>".$fila["respuesta"]."</td>
             <td><img src='".$fila["imagen"].""."' alt=''/> </td> </tr>");
}

$conexion->close();

echo("</table>");