<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 4/3/14
 * Time: 10:14 PM
 */


//[0-9] busque conincidencias de un numero del cero al 9
// /[a-z]+[@]+[a-z]+[.]+[a-z]/i","sergiohack7@gmail.com" VALIDACION SOLO LETRAS
// ^[a-z]{3}$/ solo tres caracteres a-z inicio comienzo ^$
// /[a-z0-9]+[@]+[a-z0-9]+[.]+[a-z]{3}/i","sergiohack7@gmail.com SIN validacion de puntos en el correo
// parentesis permite agrupar



if(preg_match("/[a-z0-9]+{[.][a-z0-9]+}*[@]+[a-z0-9]+[.]+[a-z]{3}/i","sergiohack7@gmail.com")){
    echo "esto es un correo";
} else{
    echo "eso no es correo";
}