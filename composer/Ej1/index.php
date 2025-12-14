<?php
//devuelve la ruta completa del directorio donde está el archivo actual el index.php en este caso
//expecion si hay varios puntos de entrada Cada punto de entrada necesita su propio require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/vendor/autoload.php'; //SOLO UNA VEZ, en el punto de entrada (normalmente index.php) el autoload esta en vendor ahora

use Bryan\Ej1\Saludo;

$saludo = new Saludo();
echo $saludo->decirHola();
