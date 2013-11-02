<?php 


$archivolog = "logs.dat";
@$ip = getenv(REMOTE_ADDR);   // @ porque me puede dar una noticia que no quiero que se guarde en la base de datos
$navegador = $_SERVER["HTTP_USER_AGENT"];                // variable de servidor $_SERVER["HTTP_USER_AGENT"]

// contenido que quiero guardar en la base de datos
// | para separar las columnas

$contenido = date("U")."|".date("Y"."|"."m"."|"."d"."|"."H"."|"."i"."|"."s")."|".$navegador."|".$ip."\n";


$manejador= fopen($archivolog,"a+"); // ya que tenemos habierto el archivo.. si no esta lo creara, segun tenga permisos el usuario 
    
fwrite($manejador,$contenido);




?>