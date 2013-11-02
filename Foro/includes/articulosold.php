<?php 


$utc=$_GET['utc'];


$conexion=mysql_connect("localhost","sergiohack","password");
mysql_select_db("blogs",$conexion);


$peticion=mysql_query("SELECT * FROM post WHERE utc='$utc'",$conexion);



while ($fila=mysql_fetch_array($peticion)) {
	
// hay que devolver los post en el formato de la plantilla

echo "





<article style='border:2px solid red;background:#BDBDBD' >


<div id='logov2b' style='height:256;width:256;background:url(\"photo/".$fila['imagen']."\");'  >aa </div>
<time> ".$fila['ano']."-".$fila['mes']."-".$fila['dia']." </time>
<h1>".$fila['titulo']."  </h1>
<h4>".$fila['subtitulo']."</h4>
<p>".$fila['texto']."</p>
<br> <a href='includes/eliminar.php?titulo=".$fila['titulo']."&subtitulo=".$fila['subtitulo']."&texto=".$fila['texto']."'>Eliminar</a>  </br>
<br> <a href='index.php?titulo=".$fila['titulo']."&subtitulo=".$fila['subtitulo']."&texto=".$fila['texto']."&editando=yes&utc=".$fila['utc']."'>Actualizar</a>  </br>
</article>


";






}
mysql_close($conexion);




 ?>

