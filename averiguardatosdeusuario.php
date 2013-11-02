<?php



$tuip=getenv(REMOTE_ADDR); // variable de entorno remote adress

echo($tuip);

echo("<br>");
$tunavegador = $_SERVER["HTTP_USER_AGENT"];  // una variable de servidor por lo tanto $_SERVER

echo("el navegador que usas y el S.O Son".$tunavegador);

$archivo ="cadenas.php";
$manejador=fopen($archivo,"w+") ;  // fopen ($nombredelarchivo,"tipodeescritura")  ... donde tipo de escritura puede ser
								 //  a+ == final.del.archivo.sinsaltos | w+ reescribir su contenido con el nuevo |
//fwrite($manejador,$contenido);

echo $manejador

?>