<?php


include "variable.php";

echo($fruta);

// cambiando 

$fruta="manzana";
include_once "variable.php";  // revisara si esta incluida, sino la incluira
echo($fruta);



?>