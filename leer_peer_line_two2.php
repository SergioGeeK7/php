


	




<?php


$nombre_fichero = "log.txt";
$fichero = fopen($nombre_fichero,’rb’);
$contenido = fread($fichero, filesize($nombre_fichero));
fclose($fichero);
$lineas = explode(“n”,$contenido);
foreach ($lineas as $linea) {
echo $linea.”n”;
}




?>


}



