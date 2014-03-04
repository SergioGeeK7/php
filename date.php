<?PHP



echo(date("d")); // dia del mes con dos digitos 02 06 13 26

echo("<br>");

echo(date("j")); // dia pero sin cero al inicio 1 5 6 8

echo("<br>");

echo(date("D"));  // devuelve el dia en ingles solo las iniciales
echo("<br>");

echo(date("l")); //  devuelve el dia completo en ingles

echo("<br>");
echo(date("N"));  // el numero del dia en que nos encontramos
echo("<br>");
echo(date("w")); // numero del dia

echo("<br>");
echo(date('z'));  // numero de dias transcurridos desde enero. teniendo en cuenta que enero el dia 1 es el dia 0

echo("<br>");
echo(date("W")); // numero de semanas que a pasado en en año

echo("<br>");
echo(date("F")); // el mes en el que se encuentra en ingles

echo("<br>");
echo(date("m")); // numero del mes en el que esta


echo("<br>");
echo(date("M")); // tres primeras letras del mes actual
echo("<br>");

echo("Estamos a ").date("j")." de ".date("F")." del ano ".date("Y");

echo("<br>");
echo("<p> año </p>"); 




/*

n == numero del mes sin ceros
m == numero del mes un ceros adelante
t == los dias que existen en el mes que me encuentro

años

Y=año completo en el que estamos
y=ultimos dos digitos del año actual
L== devolverra 0 o 1 indicando si es visiesto o no
c==te devuelve la fecha en el formato iso 8601 año mes dia hora minuto segundo y la diferencia respecto a la hora de Gregish medirian time
U== los segundos que han pasado desde que empezo la empoca UNIX  00:00 del 1 enero 1970;










*/


















?>