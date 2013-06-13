<?php



$tuip=getenv(REMOTE_ADDR); // variable de entorno remote adress

echo($tuip);

echo("<br>");
$tunavegador = $_SERVER["HTTP_USER_AGENT"];  // una variable de servidor por lo tanto $_SERVER

echo("el navegador que usas y el S.O Son".$tunavegador);


?>