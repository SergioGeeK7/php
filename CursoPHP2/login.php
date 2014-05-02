<form action="" method="post">
    <input type="text" name="user" placeholder="usuario"/>
    <input type="password" name="password" placeholder="contrasena"/>
    <input type="submit"/>
</form>

<?php

$contador=0;
$conexion=mysqli_connect("localhost","root","","login");

//if(isset($_POST["user"])){
//    echo "hellow";
//}

if($_POST){

    $_POST["password"] = md5($_POST["password"]);
    $consulta=mysqli_query($conexion,"SELECT * FROM login WHERE usuario= '".$_POST["user"]."' AND password='".$_POST["password"]."' ");

    while($fila = mysqli_fetch_array($consulta)){
        $contador++;
    }

    echo $contador==0 ? "no haz entrado correctamente a la aplicacion":"estas registrado correctamente";

}























