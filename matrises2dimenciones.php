<?php


//se aran de dos posiciones ya que no queremos que la linea se vea de corrida
//como nombre telefono email 



$agenda[0]["nombre"]="luis";
$agenda[0]["telefono"]="46548654";
$agenda[0]["email"]="serg.hotmail.com";

$agenda[1]["nombre"]="carlos";
$agenda[1]["telefono"]="46548654";
$agenda[1]["email"]="serg.hotmail.com";

$agenda[2]["nombre"]="marcela";
$agenda[2]["telefono"]="46548654";
$agenda[2]["email"]="serg.hotmail.com";

//echo($agenda[2]["nombre"]);


for ($indice=0;$indice<3;$indice++){


echo "
<table border=1 width=300px>

<tr>     <!-- fila  tr-->

<td>     <!-- columnas  td-->
Nombre :
</td>

<td> 
".$agenda[$indice]['nombre']."
</td>


</tr>

<tr>     <!-- fila  tr-->

<td>     <!-- columnas  td-->
Numero :
</td>

<td> 
".$agenda[$indice]['telefono']."
</td>


</tr>

<tr>     <!-- fila  tr-->

<td>     <!-- columnas  td-->
Email :
</td>

<td> 
".$agenda[$indice]['email']."
</td>


</tr>




</table>

";


}




$answer["bien"]="YO ? ... Super !!";
$nombre="sergio";
echo"<p> hola ".$nombre." como estas compa ".$answer['bien']."</p>";




?>