<?php 

//include 'clase.php'; autoload

// esta clase incluye todo lo que este en el directorio .php
function __autoload($nombre){
	include $nombre.'php';
}



$obj1 = new clase1();
$obj2 = new clase2();

 ?>