<?php






$conexion = sqlite_open("biblioteca.db");  // abrir base de datos + ruta del archivo


// para que haga la conexion, hay que crear la consulta


$consulta ="SELECT * FROM Discos ";  // select == seleccionar * todo from=de discos == tabla

$resultado = sqlite_query($conexion,$consulta);  // en la coneccion avierta voy a realizar la consulta ya seleccionada

// guardamos el resultado en la variable resultado


// ahora todo a pasado a estar en una matriz asociativa dentro de consulta


				//para guardarlo todo en un array
while ($fila = sqlite_fech_array($resultado)) {   // siempre que se de una una condicion se dara un resultado.. siendo la condicion $fila

// fila es = a sqlite_fech_array(lellevaelresultadode la consulta)	

echo $fila['artista'].' '.$fila["Disco"].' '.$fila['anio'].'<br/>';


}



sqlite_close($conexion); // para cuando finalize la base de datos se cierre correctamente


?>