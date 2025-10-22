<?php
// 1. Obtener el texto que index.php nos envió
$dato = "HOLA"; // Un valor por defecto por si falla


// 2. Cargar imagen (asegúrate que la ruta './img/fondo.jpeg' existe)
$imagen = imagecreatefromjpeg("./img/fondo.jpeg");

// 3. Crear colores
$rojo = imagecolorallocate($imagen, 255, 0, 0);

// 4. Escribir el texto en la imagen
// Usamos imagestring(imagen, tamaño_fuente, x, y, texto, color)
imagestring($imagen, 5, 20, 15, $dato, $rojo);

// 5. Cabecera OBLIGATORIA
// Le dice al navegador que este archivo es una imagen, no HTML
header("Content-type: image/jpeg");

// 6. Mostrar la imagen final
imagejpeg($imagen);

// 7. Liberar memoria
imagedestroy($imagen);

// ¡No debe haber nada más aquí! Ni espacios, ni HTML, ni 'echo'.
