<?php 
	require("conexion.php");
	$nombrecargo=$_POST['cargo'];
	mysqli_query($con,"insert into cargo values('','$nombrecargo')")or die(mysqli_error());
	echo "<h2>Dato insertado</h2>";
 ?>
