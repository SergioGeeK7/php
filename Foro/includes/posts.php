

<?php 


$conexion=mysql_connect("localhost","sergiohack","password");
mysql_select_db("blogs",$conexion);


$peticion=mysql_query("SELECT * FROM post WHERE usuario='".$_SESSION['usuario']."' ORDER BY utc DESC LIMIT 3",$conexion);



while ($fila=mysql_fetch_array($peticion)) {
	
// hay que devolver los post en el formato de la plantilla

echo "





<article style='border:2px solid red;background:#BDBDBD' >


<div id='logov2b' style='height:256;width:256;background:url(\"photo/".$fila['imagen']."\");'  >aa </div>
<time> ".$fila['ano']."-".$fila['mes']."-".$fila['dia']." </time>
<h1>".$fila['titulo']."  </h1>
<h4>".$fila['subtitulo']."</h4>
<p>".$fila['texto']."</p>

<br> 

";

// BORRAR LOS ENLACES DE ELIMINAR Y ACTUALIZAR <A>
if($_SESSION['login']=="yes"){
echo ";<a href='includes/eliminar.php?titulo=".$fila['titulo']."&subtitulo=".$fila['subtitulo']."&texto=".$fila['texto']."'>Eliminar</a> ";

echo " </br> <br>";

echo "<a href='index.php?titulo=".$fila['titulo']."&subtitulo=".$fila['subtitulo']."&texto=".$fila['texto']."&editando=yes&utc=".$fila['utc']."'>Actualizar</a>";
}

echo "  </br>
</article>";










}
mysql_close($conexion);



 ?>












<!-- esta es una plantilla de articulo 


<article >


<div id='logov2b'> </div>
<time> 2013-05-28 </time>
<h1>de nuevo en austria !!</h1>
<h4>grabacion de nuevos cursos con <span itemprop='contact'>SA-Sergio.tk</span> </h4>
<p>durante los proximos 15 dias estare en graz grabando dos cursos para Sergio.tk : Html5 y CSS3 y creacion de webs 2.0
con PHP </p>


</article>


-->