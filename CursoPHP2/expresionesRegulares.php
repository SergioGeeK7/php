<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 4/3/14
 * Time: 9:59 PM
 */

// regeexp


echo preg_match("/seryo/","Es es un curso de seryo");
echo preg_match("/Seryo/","Es es un curso de seryo"); // key sencitive


// /i no importan las mayusculas
// \b como palabra suelta unicas y aisladas

 if(preg_match("/\bSer\b/i","Es es un curso de seryo")){
     echo "existe una conincidencia";
 }

// [1-5] acepta Ser1yo ser2yo ser3yo ser4yo
// +2{3}+brain el 2 se tendra que repetir 3veces OR 1,3 1 o mas veces

if(preg_match("/Ser[1-5]yo/i","Es es un curso de ser5yo")){
    echo "entro";
}