<?php

$conexion = mysqli_connect("localhost","root","","preguntasyrespuestas");
if(!$conexion)echo(mysqli_error($conexion));
mysqli_query($conexion,"INSERT INTO pyr VALUES ('2','cual es el color calido','Rojo','127.0.0.1')");


mysqli_close($conexion);