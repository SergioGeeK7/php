<?php 


session_start();


$usuario=$_SESSION['usuario'];



$titulo=$_POST['titulo'];
$subtitulo=$_POST['subtitulo'];
$contenido=$_POST['contenido'];


$utc = date("U");
$ano = date("Y");
$mes = date("m");
$dia = date("d");
$hora = date("H");
$minuto = date("i");
$segundo = date("s");



// ingresar a mysql


$conexion=mysql_connect("localhost","sergiohack","password");
mysql_select_db("blogs",$conexion);


mysql_query("INSERT INTO post (ano,utc,mes,dia,hora,minuto,segundo,usuario,titulo,subtitulo,icono,texto,imagen,video,sonido) 
	VALUES ('$ano','$utc', '$mes', '$dia','$hora','$minuto','$segundo','$usuario','$titulo','$subtitulo','','$contenido','lalala.png',
		 '','')",$conexion);



/*									////////  parametros ordenados segun la tabla  //////////
mysql_query("INSERT INTO post (utc,ano,mes,dia,hora,minuto,segundo,usuario,titulo,subtitulo,icono,texto,imagen,video,sonido) 
	VALUES ('$utc', '$ano', '$mes', '$dia','$hora','$minuto','$segundo','$usuario','$titulo','$subtitulo','','$contenido','lalala.png',
		 '','')",$conexion);

*/
mysql_close($conexion);




echo "<html>
<head>
    <meta http-equiv='REFRESH' content='0;url=../index.php'> 
	<title></title>
</head>
<body>

</body>
</html>";







 ?>