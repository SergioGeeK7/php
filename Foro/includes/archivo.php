
<aside id='post'>

<h5>Post previos</h5>


<ul>


<?php 

$conexion=mysql_connect("localhost","sergiohack","password");
mysql_select_db("blogs",$conexion);

// OFFSET ES EXCLUYENDO LOS 3 PRIMEROS
$peticion=mysql_query("SELECT * FROM post WHERE usuario='".$_SESSION['usuario']."' ORDER BY utc DESC LIMIT 20 OFFSET 3",$conexion);


while ($fila=mysql_fetch_array($peticion)) {
	
echo "


<li> <a href='index.php?articulo=yes&utc=".$fila['utc']."'>  <time>".$fila['ano']."-".$fila['mes']."-".$fila['dia']."</time> / ".$fila['titulo']."  </a> </li>


" ;

}

mysql_close($conexion);

 ?>





</ul>


</aside>


