<?php 



$nombre_fichero ='log.txt';
$fichero = fopen('log.txt',’rb’);
while ( ($linea = fgets($fichero)) !== false) {

echo $linea;

	if(stristr($linea,"'xp") !== FALSE) {
    echo $linea;

  }



}
fclose($fichero);







 ?>