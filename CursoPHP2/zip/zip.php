<?php


$zip = new ZipArchive;


// $zip ->open("comprimido.zip");

$zip->open("comprimido.zip",ZipArchive::CREATE); // sino existe lo crea

$zip->addFile("imagen.jpg","imagen.jpg"); // lo que deseo añadir al zip y su nombre en el zip
$zip->addFile("imagen2.png","imagen2.png");

$zip->deleteName("imagen.jpg");


$zip->close(); // obligo para los recursos

