<?php


function traducciondia ($dia){


switch ($dia){

case "Monday" : return "Lunes";
break;

case "Tuesday" : return "Martes";
break;

case "Wednesday" : return "Miercoles";
break;

case "Thursday" : return "Jueves";
break;

case "Friday" : return "Viernes";
break;

case "Saturday" : return "Sabado";
break;

case "Sunday" : return "Domingo";
break;

default: return " What the hell";
break;
}


}


function traduccionmes ($mes){

switch ($mes){

case "January" : return "Enero";
break;

case "February" : return "Febrero";
break;

case "March" : return "Marzo";
break;

case "April" : return "Abril";
break;

case "May" : return "Mayo";
break;

case "June" : return "Junio";
break;

case "August" : return "Agosto";
break;

case "September" : return "Septiembre";
break;

case "October" : return "Octubre";
break;

case "November" : return "Noviembre";
break;

case "Dicember" : return "Diciembre";
break;



default: return " What the hell";
break;
}



}



$mes=traduccionmes(date("F"));
$dia=traducciondia(date("l"));


echo("hoy es ".$dia." de ".$mes." del ano ".date("Y"));











?>