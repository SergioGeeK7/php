<?php 


session_start();  // inicamos la sesion para coger las variables

$codigo= $_SESSION['permisos'];

if ($codigo == 1) {
	# code...

// llamamos las variables para ver si las cogio


echo("Tu Usuario es ".$_SESSION["usuario"]."<br>Tu contrasena es ".$_SESSION["contrasena"]);


$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

//////////////////CREAR RESUMEN DE VISITAS////////////////////////////////////////////////////// 
//RESUMEN DIARIO ,MES,ANUAL


$conexion = mysql_connect("localhost","sergiohack","password");

mysql_select_db("Favoritos",$conexion);

$peticion=mysql_query("SELECT * FROM logs ",$conexion);

$hora0=0;$hora1=0;$hora2=0;$hora3=0;$hora4=0;$hora5=0;$hora6=0;$hora7=0;$hora8=0;$hora9=0;$hora10=0;$hora11=0;$hora12=0;$hora13=0;
$hora14=0;$hora15=0;$hora16=0;$hora17=0;$hora18=0;$hora19=0;$hora20=0;$hora21=0;$hora22=0;$hora23=0;$hora24=0;


while ($fila=mysql_fetch_array($peticion)) {
	

switch ($fila['Hora']) {
	case '0':
		$hora0++;
		break;

	case '1':
		$hora1++;
		break;
	
	case '2':
		$hora2++;
		break;
	
	case '3':
		$hora3++;
		break;
	
	case '4':
		$hora4++;
		break;
	
	case '5':
		$hora5++;
		break;
	
	case '6':
		$hora6++;
		break;
	
	case '7':
		$hora7++;
		break;
	
	case '8':
		$hora8++;
		break;
	
	case '9':
		$hora9++;
		break;
	
	case '10':
		$hora10++;
		break;
	
	case '11':
		$hora11++;
		break;
	
	case '12':
		$hora12++;
		break;
	
	case '13':
		$hora13++;
		break;
	
	case '14':
		$hora14++;
		break;
	
	case '15':
		$hora15++;
		break;
	
	case '16':
		$hora16++;
		break;
	
	case '17':
		$hora17++;
		break;
	
	case '18':
		$hora18++;
		break;
	
	case '19':
		$hora19++;
		break;
	
	case '20':
		$hora20++;
		break;
	
	case '21':
		$hora21++;
		break;
	
	case '22':
		$hora22++;
		break;
	
	case '23':
		$hora23++;
		break;

	case '24':
		$hora24++;
		break;
	
	
	default:
		# code...
		break;
}

}
/*
echo "Visitas en la hora 00: $hora0 <br/>";
echo "Visitas en la hora 01: $hora1 <br/>";
echo "Visitas en la hora 02: $hora2 <br/>";
echo "Visitas en la hora 03: $hora3 <br/>";
echo "Visitas en la hora 04: $hora4 <br/>";
echo "Visitas en la hora 05: $hora5 <br/>";
echo "Visitas en la hora 06: $hora6 <br/>";
echo "Visitas en la hora 07: $hora7 <br/>";
echo "Visitas en la hora 08: $hora8 <br/>";
echo "Visitas en la hora 09: $hora9 <br/>";
echo "Visitas en la hora 10: $hora10 <br/>";
echo "Visitas en la hora 11: $hora11 <br/>";
echo "Visitas en la hora 12: $hora12 <br/>";
echo "Visitas en la hora 13: $hora13 <br/>";
echo "Visitas en la hora 14: $hora14 <br/>";
echo "Visitas en la hora 15: $hora15 <br/>";
echo "Visitas en la hora 16: $hora16 <br/>";
echo "Visitas en la hora 17: $hora17 <br/>";
echo "Visitas en la hora 18: $hora18 <br/>";
echo "Visitas en la hora 19: $hora19 <br/>";
echo "Visitas en la hora 20: $hora20 <br/>";
echo "Visitas en la hora 21: $hora21 <br/>";
echo "Visitas en la hora 22: $hora22 <br/>";
echo "Visitas en la hora 23: $hora23 <br/>";
echo "Visitas en la hora 24: $hora24 <br/>";


*/

$anchura=20;
$multiplicador=5;
$desface=1;

echo "<br>Visitas durante el dia de hoy";

echo "<table border='1' valign='bottom'>

<tr valign='bottom'> 

<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora0+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora1+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora2+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora3+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora4+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora5+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora6+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora7+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora8+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora9+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora10+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora11+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora12+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora13+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora14+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora15+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora16+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora17+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora18+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora19+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora20+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora21+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora22+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora23+$desface))."'>  </img> </td>
<td> <img src='square.png' width='".$anchura."' height='".($multiplicador*($hora24+$desface))."'>  </img> </td>


</tr>

<td> 0 </td>
<td> 1 </td>
<td> 2 </td>
<td> 3 </td>
<td> 4 </td>
<td> 5 </td>
<td> 6 </td>
<td> 7 </td>
<td> 8 </td>
<td> 9 </td>
<td> 10 </td>
<td> 11 </td>
<td> 12 </td>
<td> 13 </td>
<td> 14 </td>
<td> 15 </td>
<td> 16 </td>
<td> 17 </td>
<td> 18 </td>
<td> 19 </td>
<td> 20 </td>
<td> 21 </td>
<td> 22 </td>
<td> 23 </td>
<td> 24 </td>
<tr> 


</tr>

</table>


";


mysql_close($conexion);



// crear conexion 

$conexion=mysql_connect("localhost","sergiohack","password");


// establecer una consulta
mysql_select_db("Favoritos",$conexion);
$consulta = mysql_query("SELECT * FROM logs",$conexion);



// ejecutar la consulta

//--ia
// imprimir la consulta

// width 100% se estira el 100% de lo que de el navegador. como este la ventana
echo("


<table border='1' width='100%'>    

<tr>

<td>Marca de tiempo </td>
<td>Ano </td>
<td>Mes</td>
<td>Dia</td>
<td>Hora</td>
<td>Minuto</td>
<td>Segundo  </td>
<td> IP </td>
<td> Navegador </td>
<td> Usuario </td>
<td> Contrasena </td>
</tr>

	");


while ($fila=mysql_fetch_array($consulta)) {  // lo que hace es convertir la consulta que devuelve la base de datos en una matriz
	// TODO LO QUE PONGA DESPUES DE php? con variables METODO GET

echo"

<tr>

<td>".$fila["Utc"]."</td>
<td>".$fila["Ano"]." </td>
<td>".$fila["Mes"]."</td>
<td>".$fila["Dia"]."</td>
<td>".$fila["Hora"]."</td>
<td>".$fila["Minuto"]."</td>
<td>".$fila["Segundo"]."</td>
<td>".$fila["IP"]."</td>
<td>".$fila["Navegador"]."</td>
<td>".$fila["Usuario"]."</td>
<td>".$fila["Contrasena"]."</td>

";

 //  echo $fila["Titulo"].$fila["Direccion"].$fila["Categoria"].$fila["Comentario"].$fila["Valoracion"];


}


// añadir un registro




echo "</table>";


// cerrar la conexion

mysql_close($conexion);
}else{



echo "Lo Sentimos, No tienes Permisos suficientes para acceder a esta pagina";


}





 ?>