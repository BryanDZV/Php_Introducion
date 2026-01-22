<?php
require __DIR__ . "/autoload.php";

use Config\BaseDatos;

$db = new BaseDatos();

/* 1️⃣ Crear base de datos y tablas */
echo "<br>";
try {
    $db->ejecutarArchivoSQL(__DIR__ . "/src/datos/BaseDatos.txt");
} catch (\Throwable $th) {
    echo "---------------";
}


/* 2️⃣ Insertar datos */
$db->ejecutarArchivoSQL(__DIR__ . "/src/datos/datosTablas.txt");

echo "Base de datos creada y datos insertados correctamente";
