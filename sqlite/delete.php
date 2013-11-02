<?php


$conexion=sqlite_open("bibliotecasqlite.db");

$consulta="DELETE FROM Discos WHERE Artista='U2";

// DELEFE FROM Discos ; si lo ejecuta asi eliminaria todo su contenido de la tabla Discos


mysql_select_db(database_name)

$resultado=sqlite_query($conexion,$consulta);

sqlite_close($conexion);


?>