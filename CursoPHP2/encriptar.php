<?php


$cadena = "password";

echo "el valor original es".$cadena."<br><br>";

$encriptado1 = md5($cadena);

echo $encriptado1." cadena 1 <br> <br>";

echo "el valor original es".$cadena."<br><br>";

$encriptado2 = sha1($cadena);

echo $encriptado2." cadena 2";