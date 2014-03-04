<head>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
</head>

<?php 
//SELECT Q.COMENTARIO, V.NOMBRE, Z.NOMBRE
//FROM quejas Q
//JOIN vendedor V ON Q.CARNET = V.CARNET
//JOIN zona Z ON V.IDZONA = Z.IDZONA
//LIMIT 0 , 30


$conexion = mysqli_connect('localhost','root','');
mysqli_select_db($conexion,'espacio_publico');

$consulta = mysqli_query($conexion,'SELECT nombre FROM zona ORDER BY nombre');
$arreglo_php = array();

if(mysqli_num_rows($consulta)==0)
   array_push($arreglo_php, "No hay datos");
else{
  while($fila = mysqli_fetch_array($consulta)){
    array_push($arreglo_php, $fila["nombre"]); // cargamos el arreglo php
  }
}



 ?>

 <script>
  $(function(){
    var places = new Array();
    <?php //Iniciamos con php para descargar el array
     for($p = 0;$p < count($arreglo_php); $p++){ //usamos count para saber cuantos elementos hay ?>
       places.push('<?php echo $arreglo_php[$p]; ?>');
     <?php } // cierre for php ?>

    var myJSON = JSON.stringify({places: places});
    document.write(myJSON);



     // UNA PETICION AJAX CON LO DE ARRIBA

     
  });
</script>