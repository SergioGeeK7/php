<?php 

$_SESSION['utc']=$_GET['utc'];


$titulo=$_GET['titulo'];
$subtitulo=$_GET['subtitulo'];
$texto=$_GET['texto'];
$utc=$_GET['utc'];





 ?>

<article style='background:rgba(0,255,0,0.2) '>




<form action='includes/actualizarpost.php?utc=<?php echo " $utc"; ?>' method='POST'>
<div id='logov2b'> </div>
<!--  <time> 2013-05-28 </time>  -->
<h1>Titulo del Post <input type='text' name='titulo' value=' <?php echo " $titulo"; ?>'>  </h1>
<h4>Subtitulo del Post <input type='text' name='subtitulo' value=' <?php echo " $subtitulo"; ?>'>  </h4>
<p> Contenido del Post <input type='text' name='contenido' value=' <?php echo " $texto"; ?>'> </p>
<input type='hidden' name='utc' value='<?php echo " $utc"; ?>' >
<input type='submit'>




</form>




</article>
