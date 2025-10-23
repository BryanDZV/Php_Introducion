<?php

// 1. Cargar imagen
$imagen = imagecreatefromjpeg("./img/fondo.jpeg");

// 2. Definir un color

$blanco = imagecolorallocate($imagen, 255, 255, 255);
// Sintaxis correcta: rand(min, max)
$colorRandom = imagecolorallocate($imagen, rand(0, 255), rand(0, 255), rand(0, 255));

// 3. Definir la ruta de la fuente
$fuente = "./fuentes/OpenSans-Regular.ttf";

// 4. Escribir el texto en la imagen
$texto = "juanfe";
$longitud = strlen($texto);
$c = "";
// imagefttext(imagen, tamaño, angulo, x, y, color, fuente, texto)
for ($i = 0; $i < $longitud; $i++) {
    $c .= $texto[$i];
}

imagefttext(
    $imagen,
    20,       // Tamaño de fuente fijo (ej. 40 puntos)
    0,        // Ángulo (0 = horizontal)
    50,       // Posición X (50px desde la izquierda)
    50,      // Posición Y (100px desde la parte superior - ¡esta es la línea base!)
    $colorRandom,  // Color
    $fuente,  // Fuente
    $c  // Texto
);



// 5. Cabecera OBLIGATORIA: Informar al navegador que esto es una imagen
header("Content-type: image/jpeg");

// 6. Mostrar la imagen final
imagejpeg($imagen);

// 7. Liberar memoria
imagedestroy($imagen);
