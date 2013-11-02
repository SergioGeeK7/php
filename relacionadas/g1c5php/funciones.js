$(document).on("ready",inicio);


function inicio(){
	//  variable  referencia  funcion
	var  boton1;
	boton1=$("#guardar");
	boton1.on("click",guardardatos);
}
function guardardatos(){
	var nom,conte;
	nom=$("#nombre").val();
	conte=$("#mensaje");
	//  en el contenido  voy a cargar
	// el insertarcargo.php
	// y le envio la variable
	// cargo me la invento  y es la que usa 
	// php  que le asigna  nom
	conte.load("insertarcargo.php",{cargo:nom});
}