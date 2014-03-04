<?php 

$conexion = sqlite_open("biblioteca.db") or die ("no se ha podido conectar");

$consulta=

<<<SQL 

INSERT INTO Discos VALUES ('Queen','Queen',1973);

INSERT INTO Discos VALUES ('Queen','QueenII',1974);

INSERT INTO Discos VALUES ('Queen','Sheet hart attack',1974);

INSERT INTO Discos VALUES ('Queen','The opera',1975);

INSERT INTO Discos VALUES ('Queen','Octover',1980);

INSERT INTO Discos VALUES ('Queen','War',1983);
SQL;

$resultado= sqlite_exec($conexion,$consulta);


sqlite_close($conexion);


?>