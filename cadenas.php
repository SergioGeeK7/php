<?php

// usar comillas simples en una cadena 


echo("soy una cadena con 'comillas'");


// al reves
echo("<br>");
echo('soy un texto con millas "dobles" ');
echo("<br>");
echo("soy un texto que utilizara \"doble comillas\" sin error");

echo("hola soy un texto \t hola yo tambien pero en otra linea <br>");


$num=5;

echo("primer incremento $num++ <br>");
echo $num++."<br>";
echo $num."<br>";

echo("segundo incremento ++$num <br>");
echo ++$num."<br>";
echo("multiplicare $num por $num ... el resultado es $num*$num ooooooo ".$num*$num."<br>" );


$num2=3;

$num2+=7;

echo $num2."<br>";

$num2-=3;

echo $num2;

echo("<br>");


$nombre="SERGIO";

$WHATHIS="MI NOMBRE ES ";

//$WHATHIS+="ss";

echo($WHATHIS)."<br>";


echo $WHATHIS.$nombre;




?>