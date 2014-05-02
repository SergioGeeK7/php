<?php


header("Content-type: image/png");  //orden header para que el documento sea tratado como imagen

$imagen1 = ImageCreateTrueColor(600,600);
imagecopy($imagen1,imagecreatefrompng("imagen2.png"),0,0,0,0,600,600);
//imagefilter($imagen,IMG_FILTER_EDGEDETECT);

$imagen2 = ImageCreateTrueColor(150,150); // new imagen

imagecopyresized($imagen2,$imagen1,0,0,0,0,300,300,600,600);


$rojo = ImageColorAllocate($imagen2,255,0,0);

Imagestring($imagen2,50,0,0,"By seryo",$rojo);

//ImageFillBorder establecer borde a la imagen

$negro = "elegir color";
$font = "ruta de la fuente";
$texto ="texto a mostrar";
// imagettftext()


//ImagePNG($imagen1);
//ImageJPEG($imagen2,NULL,100);// de cero a 100 calidad ,null para no cambiarle el nombre
ImagePNG($imagen2);
ImageDestroy($imagen);