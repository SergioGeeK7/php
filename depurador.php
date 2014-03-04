<?php






$dia=date("l");
echo($dia);

$dia="Tuesday";

/*
switch ($dia){

case "Monday" : $dia= "Lunes"
break;

case "Tuesday" : $dia= "Martes"
break;

case "Wednesday" : $dia= "Miercoles"
break;

case "Thursday" : $dia= "Jueves"
break;

case "Friday" : $dia= "Viernes"
break;

case "Saturday" : $dia= "Sabado"
break;

case "Sunday" : $dia= "Domingo"
break;

default: $dia= " What the hell"
break;
}
*/



switch ($dia) {
	case 'Monday':
		$dia= "Lunes";
		break;
	case 'Tuesday':
		$dia= "Martes";
		break;

	default:
		# code...
		break;
}






echo($dia);


?>