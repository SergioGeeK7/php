<?php

header("Content-type: image/jpg");  //orden header para que el documento sea tratado como imagen

$y = 300;

$imagen = ImageCreateTrueColor(600,$y); // guardar la imagen en la memoria

$blanco = ImageColorAllocate($imagen,225,225,225);

ImageFillToBorder($imagen,0,0,$blanco,$blanco);


$rojo = ImageColorAllocate($imagen,225,0,0);


ImageFilledRectangle($imagen,10,$y-20,20,($y-20-50),$rojo);
ImageFilledRectangle($imagen,30,$y-20,40,($y-20-70),$rojo);
ImageFilledRectangle($imagen,50,$y-20,60,($y-20-90),$rojo);
ImageFilledRectangle($imagen,70,$y-20,80,($y-20-110),$rojo);

// amplificar el valor (db) para que se nota mas

//ImageFilledEllipse($imagen,250,250,100,20,$rojo);


//imagecopy
//imagefilter()

ImageJPEG($imagen);

ImageDestroy($imagen); // cerrar los recursos para asegurar el liberarlos

