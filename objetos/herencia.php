<?php 

class saludo {



var $saludo1;



function saludo (){

echo("Hola");


}

function saludo2 ($saludo1){

$this->saludo1=$saludo1;
echo($this->saludo1);

}
}




// clase extendera a saludo 
class subsaludo extends saludo {    

var $atributo;

// constructor
function subsaludo (){




}


}






$wenas = new subsaludo();
$wenas->saludo2("Oolas");
//$wenas->holados();


?>