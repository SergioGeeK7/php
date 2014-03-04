<?php 


// definir dos variables, una el archivo donde quiero escribir informacioin
// la otra es lo que quiero escribirle
$archivo ="archivo.txt";
$contenido="este es mi contenido";
$manejador=fopen($archivo,"w+") ;  // fopen ($nombredelarchivo,"tipodeescritura")  ... donde tipo de escritura puede ser
								 //  a+ == final.del.archivo.sinsaltos | w+ reescribir su contenido con el nuevo |
fwrite($manejador,$contenido);




?>