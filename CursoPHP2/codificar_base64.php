<?php


$cadena= "este es el texto que quiero codificar";
$codificado = base64_encode($cadena);

$decodificado = base64_decode($codificado);

echo $codificado."<br>";
echo $decodificado;