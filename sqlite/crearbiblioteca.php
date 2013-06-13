<?php


$conexion = sqlite_open("bliblotecasqlite.db") or die("ha sido imposible establcer la conexion"); 
// en sqlite las bases de datos tienen las extencin . db


// crear consulta a hacer
$consulta = <<<SQL 

CREATE TABLE Discos (

Artista char(20) not null,
Disco char(40),
Ano integer      

);



SQL;

// ejecutar la insertion

$resultado = sqlite_exec($conexion,$consulta);

?>