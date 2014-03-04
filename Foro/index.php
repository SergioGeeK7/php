<?php 


session_start();

if (isset($_SESSION['USUARIOTEMPORAL'])){
$_SESSION['USUARIOTEMPORAL']=$_GET['u'];

}else{
$_SESSION['USUARIOTEMPORAL']="sergio";

}





// otro archivo que coge las variables de session a insertarlas en la base de datos

include "includes/variablesusuario.php";


if (isset($_SESSION['login'])) {
	

}else{

$_SESSION['login']="no";

}


if (isset($_GET['editando'])) {
	
$editando = $_GET['editando'];

}else{
	$editando="no";
}

if (isset($_GET['articulo'])) {
	
$articulo = $_GET['articulo'];

}else{
	$articulo="no";
}




 ?>



 <html>
 <head>

 	<title>Pagina de inicio</title>
 	

 <!--	<link rel="stylesheet" type="text/css" href="css/estilos.css"> -->

 </head>
 



 <body style='background:white;'>


 <p> aqui ira mi formulario de login o lo que sea </p>


<?php 

if ($_SESSION['login']=="yes") {

echo " <a href='includes/logout.php'>LogOut!! </a>   ";
	
}else{
	 echo"<form action='includes/login.php' method='POST'>
	 
	 Escribe tu usuario<input type='text' name='usuario'>
	 Escribe tu contrasena<input type='password' name='contrasena'>
	 <input type='submit'>
	 
	 
	  </form>

	  <p> No tienes cuenta... <a href='index.php?registro=yes'> Registrate ahora !! </a> </p>

	  ";


}



if (isset($_GET['registro'])) {
$registro=	$_GET['registro'];

}else{
	$registro="no";
}




 ?>


<h1>  WELCOME <?php echo $_SESSION['nombre']." ".$_SESSION['apellido1']; ?> !!!</h1>  
<!-- se saco el valor dinamico de la variable php, -->



<div id='principal' style='border:1px solid red ;height:400px;width:850px;background:url("photo/<?php echo $_SESSION['foto']; ?>")'>


<h3>        MI Descripcion </h3>

<p> <?php echo $_SESSION['descripcion']; ?>  </p>
<br>
<h4>       MI WEB =  <a href=" <?php echo $_SESSION['web'];     ?> ">  <?php echo $_SESSION['web'];     ?>  </a>    </h4>



</div>


<?php 

// articulo muestra el articulo viejo seleccionado por el index.php
// articulo oculta todo a excepcion de el include regitro. pasado y motratado por el index.php regitro y tomado con el GET



if($_SESSION['login']=="yes"){
if ($articulo=="no"){
if ($editando=="yes"){} else { include "includes/crearpost.php"; }}else{}}else{} ?>


<?php if ($registro=="no") { }else{ include "includes/formularioregistro.php"; } ?>




 <p>aqui van los Post</p>
<?php 
if ($registro=="no"){
if ($articulo=="no"){
	// todos los post el usuario
	if($editando=='yes'){}else{ include "includes/posts.php";} }else{}}else{}?>


<?php 

if ($articulo=="no"){
	// coge las variables que le envian al index.php cuando se generan los post con un GET muestra el post a actualizar
	if($editando=='yes'){include "includes/actualizar.php";}else{ }}else{} ?>


<?php 

// muestra los articulos viejos segun el que le envien si articulo==yes le envian una variable a index.php
if($articulo=='yes'){include "includes/articulosold.php";}else{ } ?>


<!-- incluye archivo si el usuario no esta editando.... archivo contiene los enlaces de articulos old -->
<?php 
if ($registro=="no"){
if($editando=='yes'){}else{ include "includes/archivo.php";}}else{} ?>


 </body>
 </html>