<?php

$zip = new ZipArchive();

$zip->open("comprimido.zip",ZipArchive::CREATE); // sino existe lo crea
$zip->extractTo("contenidoExtraido/");
$zip->close();