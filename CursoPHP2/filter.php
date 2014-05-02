<?php

$email = "sergio.hack7¿@gmail.com";

$url ="sergio.tk";
// validar
ECHO filter_var($email,FILTER_VALIDATE_EMAIL); // devuelve el correo si es correo sino, no devuelve nada

// sanear valida y corrige elementos no permitidos

ECHO filter_var($email,FILTER_SANITIZE_EMAIL); // INTENTA corregir el email contra caracteres no permitidos

// validar URLs http://
// FILTER_FLAG_PATH obliga a que haya una ruta en la URL
// FILTER_FLAG_QUERY obliga a que haya una peticion php?user=joservicente @variabledenavegador
echo filter_var($url,FILTER_VALIDATE_URL);

// filtro 4 para comillas

$mensajeUsuario = "tengo un problema con PHP me dice que 'Error 404', que puedo hacer ? ";

// ojo porque si intento recuperar eso en un echo con comillas simples  Error;


// \'Error 404\'
var_dump(filter_var($mensajeUsuario,FILTER_SANITIZE_MAGIC_QUOTES));

// Validar IPS


$ip = "192.168.1.126";
//$ip = "192.168.1.264.1";

echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4);

