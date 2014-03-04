<?php

// resiviremos las variables que se enviaron

echo "tu nombre es".$_GET["nombre"]."<br>";
echo "tu apellido es".$_GET["apellido"];
echo "dime si eres alministrador".$_GET["admin"]; // podria trucarse en la url final y alterar los resultados , con &admin=si



?>