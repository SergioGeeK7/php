<?php
/**
 * Created by PhpStorm.
 * User: kratos
 * Date: 4/2/14
 * Time: 11:10 AM
 */
$conexion = mysqli_connect("localhost","root","","preguntasyrespuestas");
if(!$conexion)echo(mysqli_error($conexion));
mysqli_query($conexion,"UPDATE pyr SET ip = 'localhost'");


mysqli_close($conexion);
