<?php


$imagen = imagecreatefromjpeg("./img/fondo.jpeg");



$blanco = imagecolorallocate($imagen, 255, 255, 255);

$colorRandom = imagecolorallocate($imagen, rand(0, 255), rand(0, 255), rand(0, 255));


$fuente = "./fuentes/OpenSans-Regular.ttf";


$texto = "juanfe";
$array = str_split($texto);
$c = [];
for ($i = 0; $i < count($array); $i++) {
    $c = $array[$i];
}
$color =

    imagefttext(
        $imagen,
        20,
        0,
        50,
        50,
        rand(0, 255),
        $fuente,
        $c
    );





header("Content-type: image/jpeg");


imagejpeg($imagen);


imagedestroy($imagen);
