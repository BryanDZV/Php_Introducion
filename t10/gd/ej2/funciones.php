<?php
function generar_captcha($fondo, $dato)
{
    // 2. Cargar imagen 
    $imagen = imagecreatefromjpeg($fondo);
    // 3. Crear colores
    $colores = imagecolorallocate($imagen, rand(0, 255), rand(0, 255), rand(0, 255));
    // 4. Escribir el texto en la imagen
    // Usamos imagestring(imagen, tamaño_fuente, x, y, texto, color)
    imagestring($imagen, 5, 20, 15, $dato, $colores);
    // 5. Cabecera OBLIGATORIA
    // Le dice al navegador que este archivo es una imagen, no HTML
    header("Content-type: image/jpeg");

    // 6. Mostrar la imagen final
    imagejpeg($imagen);

    // 7. Liberar memoria
    imagedestroy($imagen);

    // ¡No debe haber nada más aquí! Ni espacios, ni HTML, ni 'echo'.


}
