 <?php

 //-----------------------------------EXAPLE-------------------------------------------------------
// //Ejemplo Estatico Mostrando el Resultado final a devolver
// //  echo '{"NoOrden":"5001","Cliente":"Alejandra Ming":"DomicilioEntrega":"Mexico DF CP 14751","Importe":"800"}';



//     $resultado['enviado'] = $_POST; // guarda toda la matriz post en la variable resultado['enviado']
//     $resultado['respuesta'] = 'Gracias por sus datos '.$_POST['nombre'].', le llamaremos al '.$_POST['telefono'].' en horario de '.$_POST['horario'];
//      
//     echo json_encode($resultado); // cogame toda la matriz resultado y serializemela...




// 	// {
// 	// 'enviado'{}
// 	// 'respuesta': 'gracias .... y lalala '
// 	// }

// 	$.ajax({
//     url: 'tutorial-ajax.php',
//     data: {
//         nombre: 'Pepito',
//         telefono: '996669966',
//         horario: 'Tarde'
//     },
//     type: 'POST',
//     dataType: 'json',
//     success: function(datos){
//         $('#resultados').text(JSON.stringify(datos, null, 4));
//         $('#respuesta').text(datos.respuesta).fadeIn('slow');
//     }
// });
///------------------------------------------------------------ END-------



//$peticion = $_POST['peticion'];
$peticion = 'exito de robledo';
$conexion = mysqli_connect('localhost','root','');
mysqli_select_db($conexion,'espacio_publico');

$consulta = mysqli_query($conexion,"SELECT nombre,idzona FROM zona WHERE nombre='$peticion'");


$slices = explode(' ', $peticion);
$talvez = mysqli_query($conexion,"SELECT nombre,idzona FROM zona WHERE nombre LIKE '%".$slices[count($slices)-1]."' ");
$array2 = array();
while ($fila=mysqli_fetch_array($talvez)) {

	array_push($array2, $fila["nombre"]); // cargamos el arreglo php
	array_push($array2, $fila["idzona"]); // cargamos el arreglo php

}
$array1=mysqli_fetch_array($consulta);

$uni = array_merge($array1,$array2);
echo json_encode($uni);

//echo json_encode(mysqli_fetch_array($consulta,$talvez));

// $arreglo_php = array();
// $str = "esta es mi cadena que puede tener una longitud variable";
// $slices = explode(' ',$str);
// $primera = '<etiqueta1>'.$slices[0].'</etiqueta1>';
// $ultima = '<etiqueta2>'.$slices[count($slices)-1].'</etiqueta2>';
// $slices[0] = $primera;
// $slices[count($slices)-1] = $ultima;
// print implode(' ',$slices);






 ?>

