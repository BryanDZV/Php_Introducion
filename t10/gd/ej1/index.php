<?php
// 1. Cargar imagen
$imagen = imagecreatefromjpeg("./img/fondo.jpeg");
// 2. Obtener dimensiones
$ancho = imagesx($imagen);
$alto  = imagesy($imagen);
// 3. Crear colores
$negro = imagecolorallocate($imagen, 0, 0, 0);
$rojo = imagecolorallocate($imagen, 255, 0, 0);
$aleatorio = $numero = random_int(1, 100);
// 4. Modificaciones (ejemplo: texto)
imagestring($imagen, 6, 10, 10, "hola mundo", $rojo);
imagesetpixel($imagen, 3, 3, 245);
// 5. Cabecera
header("Content-type: image/jpeg");
// 6. Mostrar
imagejpeg($imagen);
// 7. Liberar memoria
imagedestroy($imagen);
