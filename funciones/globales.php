<?php

$nombre = "sergio";

function localmia (){

global $nombre;
echo($nombre);



}

localmia();

?>