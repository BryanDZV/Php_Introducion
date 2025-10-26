<?php

$fondo_filename = './img/fondoheader.jpg'; // Usando la ruta que has indicado

function generar_captcha_base64($fondo_file, &$captcha_code)
{
    // --- 1. Generación de Código ---
    $caracteres = '0123456789ABCDEFGHJKLMNPQRSTUVWXYZ';
    $captcha_code = substr(str_shuffle($caracteres), 0, 6);

    // --- 2. Carga de Imagen y Verificación ---
    if (!file_exists($fondo_file)) {
        $captcha_code = "sin captcha";
        return "";
    }

    // Ruta de la fuente TrueType (¡NECESITAS UN ARCHIVO TTF EN TU DIRECTORIO!)
    $font_path = './fuentes/OpenSans-Regular.ttf'; // Reemplaza con el nombre de tu archivo de fuente


    $imagen = imagecreatefromjpeg($fondo_file);

    // --- 3. Generación de Color Aleatorio ---
    // Usamos mt_rand para generar colores aleatorios (RGB)
    $color_texto = imagecolorallocate($imagen, mt_rand(0, 200), mt_rand(0, 200), mt_rand(0, 200));

    // --- 4. Dibujar el Texto Grande (imagettftext) ---
    $size = 30;  // Tamaño de fuente en puntos (¡HAZLO MÁS GRANDE!)
    $angle = mt_rand(-5, 5); // Ángulo de inclinación (opcional, para dificultar robots)
    $x = 10;     // Coordenada X inicial (ajustar según tu fondo)
    $y = 40;     // Coordenada Y inicial (ajustar según tu fondo)

    imagettftext($imagen, $size, $angle, $x, $y, $color_texto, $font_path, $captcha_code);


    // --- 5. Guardar, Codificar y Limpiar ---
    $temp_filename = 'captcha_temp_' . uniqid() . '.jpg';
    imagejpeg($imagen, $temp_filename, 90);
    imagedestroy($imagen);

    $imagedata = file_get_contents($temp_filename);
    $base64_image = base64_encode($imagedata);

    if (file_exists($temp_filename)) {
        unlink($temp_filename);
    }

    return $base64_image;
}
