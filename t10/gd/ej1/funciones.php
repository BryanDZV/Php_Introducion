<?php
function letra($imagen, $dato)
{ // 3. Crear colores
    //$rojo = imagecolorallocate($imagen, 255, 0, 0);
    // Usamos imagestring(imagen, tamaño_fuente, x, y, texto, color)
    imagestring($imagen, 5, 20, 15, $dato, $rojo);
}
