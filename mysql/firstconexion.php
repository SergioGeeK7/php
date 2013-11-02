<?php  

// establecer la conexion mediante una variable

// utilizamos el comando mysql_connect
$conexion =mysql_connect("localhost","sergiohack","password","sergiohack");

if (!$conexion){ // si la conexion no se puede realizar

die("no he podido conectar ".mysql_error());  // debera finalizar enviando el siguiente mensaje

}

// una vez hemos cargado la conexion en una variable ya podriamos usarla
// y meteriamos algo de codigo

$variable=1;  // una variable que de momento no usa la base de datos 


// cuando cerramos una pagina php inmediatamente la conexion a la base de datos se cierra pero lo mas seguro es cerrar la conexion cuando 
// la queramos finalizar

mysql_close($conexion); // cerrar la conexion, y en parentesis la conexion a la cual estamos haciendo referencia




// dentro de las comillas pondremos 
  #1 al servidor que nos queremos conectar 
  #2 sesgundo el usuario con el que nos queremos conectar
  #3 la base de datos a la cual nos queremos conectar 

# se trata de ir de mayor a menor
# un servidor puede tener varios usuarios
# un usuario puede poseer varias bases de datos
#






?>