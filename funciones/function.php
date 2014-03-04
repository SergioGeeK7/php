<?php


function mifunction (){

echo("yo soy yo");
echo("tu eres tu");
echo("nosotros somos nosotros");

}


function multiplica ($num){


for ($por=1;$por<11;$por++){

echo ($num*$por)."<br>";

}



}




//mifunction();

for ($tabla=1;$tabla<11;$tabla++){
	echo("Tabla del $tabla")."<br>";
multiplica($tabla);

}



?>