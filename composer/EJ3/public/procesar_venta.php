<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Src\Class\Venta;

$cliente = (int) $_POST['cliente_id'];
$libros  = $_POST['libros'] ?? [];

try {
    $venta = new Venta();
    $venta->Insercion_venta_libro($cliente, $libros);

    echo "Venta realizada correctamente";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
