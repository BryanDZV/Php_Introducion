<?php

require __DIR__ . "/vendor/autoload.php";

use Bryan\Libros\Controllers\CustomerController;
use Bryan\Libros\Controllers\SaleController;

/*
    1. Recogemos la acción
    2. Si no viene ninguna, mostramos clientes
*/

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'cliente';
}

$customerController = new CustomerController();
$saleController     = new SaleController();

/*
    Decidimos qué método ejecutar
*/

if ($action === 'crearCliente') {

    $customerController->crearCliente();
} elseif ($action === 'libros') {

    $saleController->seleccionarLibros();
} elseif ($action === 'procesar') {

    $saleController->procesarVenta();
} else {

    $saleController->seleccionarCliente();
}
