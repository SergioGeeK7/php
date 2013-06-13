<?php 

$conexion=sqlite_open("bibliotecasqlite.db");

$consulta="UPDATE Disco SET Artista='Queen' WHERE Artista='Queeen'";

// tabla Discos establecer Artista="Queen" // si se hace hasta hay esblecera todos los artistas a Queen
// WHERE 

//realizar la peticion
mysql_select_db(database_name)

$resultado=sqlite_query($conexion,$consulta);

sqlite_close($conexion);


?>