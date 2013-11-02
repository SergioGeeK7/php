<?php 
	require("conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="">
	<meta charset="utf-8" />
	<title>insertar empleado</title>
</head>
<body>
	<form action="" method="post">
		Nombre: <input  name="nom"> <br>
		Correo: <input name="co"> <br>
		Cargo:
		 <select name="cargo">
		 	<?php 
		 		$consulta=mysqli_query($con,"select * from cargo");
		 		$registro=mysqli_fetch_array($consulta);
		 		do{
		 			$id=$registro['id'];
		 			$nombre=$registro['nombre'];
		 			echo "<option value=$id>$nombre</option>";	
		 		}while($registro=mysqli_fetch_array($consulta));
		 	 ?>
		 </select><br>
		 Sueldo: <input name="sueldo"><br>
		 <input type="submit">

	</form>
	<?php 
		if($_POST){
			$nom=$_POST['nom'];
			$co=$_POST['co'];
			$sueldo=$_POST['sueldo'];
			$cargo=$_POST['cargo'];
			// est inserta el empleado
			mysqli_query($con,"insert into empleado values('','$nom','$co')");
			$id=mysqli_insert_id($con);
			// si no hay empleado inicializo en 1
			if($id==0){
				$id=1;
			}
			// insertar en la tabla nomina mandar el empleado y mandar el cargo y el sueldo
			//echo " id...$id......cargo: $cargo....sueldo...$sueldo";
			mysqli_query($con,"insert into nomina values('$id','$cargo','$sueldo')")or die(mysqli_error());
			echo "<h2>Empleado insertado</h2>";
		}

	 ?>

</body>
</html>