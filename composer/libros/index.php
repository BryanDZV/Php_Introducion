<?php
require_once "../libros/vendor/autoload.php";

use Bryan\Libros\Controllers\SaleController;

$controller = new SaleController();
$action = $_GET['action'] ?? 'cliente';

switch ($action) {
    case 'libros':
        $controller->seleccionarLibros();
        break;
    case 'procesar':
        $controller->procesarVenta();
        break;
    default:
        $controller->seleccionarCliente();
}
