<?php

$db="NAME;DOMAIN;ID;MASTER;LEVEL;PASSWORD;DATE<br>";
$contenido = file_get_contents('log.txt');
$lineas = explode("\n",$contenido);
foreach ($lineas as $linea) {


if(stristr($linea,"créé") !== FALSE && stristr($linea,"ERROR") == false) {

    $alumno = explode(" ",$linea);

    if (stristr($db,$alumno[1]) == false) {
    	
    	$db.= $alumno[1].";ES;629913;agireso6585;1;asdf;2008-01-01<br>";	

    }


    

  }


}

echo "$db";


?>
