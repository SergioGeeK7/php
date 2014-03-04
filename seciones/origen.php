<?php



// se inicia la secion
session_start();

$primeravariable ="hola";



// se crea variable de sesion a guardar.
$_SESSION["segundavariable"]= "Adios";



echo($primeravariable);

echo("<a href='destino.php'>Voy al destino  </a>");



?>