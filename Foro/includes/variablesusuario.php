<?php 


//session_start(); NO HAY NECESIDAD DE CREAR VARIABLES DE SESSION, YA QUE ESTAS ESTAN ALVEGADAS EN EL INDEX...


// crear usuario de sesion


// una session falsa, cuando arranco la session ya estoy logeado como sergio

//$_SESSION['USUARIOTEMPORAL']="sergio";  
// si creamos esta linea asumimos que ya estamos logeados con contrasena y que tales


$conexion=mysql_connect("localhost","sergiohack","password");

mysql_select_db("blogs",$conexion);




// volcaremos a variables de session
// volcar en la variable de usuario, el valor usuairo 
$peticion=mysql_query("SELECT * FROM usuarios WHERE usuario='".$_SESSION['USUARIOTEMPORAL']."'",$conexion);


while ($fila=mysql_fetch_array($peticion)) {

	
$_SESSION['usuario']=$fila['usuario'];
$_SESSION['nombre']=$fila['nombre'];
$_SESSION['apellido1']=$fila['apellido1'];
$_SESSION['apellido2']=$fila['apellido2'];
$_SESSION['titulo']=$fila['titulo'];
$_SESSION['descripcion']=$fila['descripcion'];
$_SESSION['foto']=$fila['foto'];
$_SESSION['web']=$fila['web'];
$_SESSION['email']=$fila['email'];
$_SESSION['permisos']=$fila['permisos'];


}


echo "

<table border='1'>

<tr>

<td><strong>usuario</strong></td>
<td><strong>nombre</strong></td>
<td><strong>apellido1</strong></td>
<td><strong>apellido2</strong></td>
<td><strong>titulo</strong></td>
<td><strong>descripcion</strong></td>
<td><strong>foto</strong></td>
<td><strong>web</strong></td>
<td><strong>email</strong></td>
<td><strong>permisos</strong></td>
</tr>





 <tr>


<td>".$_SESSION['usuario']."</td>
<td>".$_SESSION['nombre']."</td>
<td>".$_SESSION['apellido1']."</td>
<td>".$_SESSION['apellido2']."</td>
<td>".$_SESSION['titulo']."</td>
<td>".$_SESSION['descripcion']."</td>
<td>".$_SESSION['foto']."</td>
<td>".$_SESSION['web']."</td>
<td>".$_SESSION['email']."</td>
<td>".$_SESSION['permisos']."</td>

 </tr>

</table>

";





mysql_close($conexion);







 ?>



