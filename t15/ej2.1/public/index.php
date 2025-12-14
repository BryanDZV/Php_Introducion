<?php
require_once __DIR__ . '/../src/Core/Autoload.php';

use App\Core\Autoload;
use App\Controller\SaleController;

// Registrar autoload
Autoload::register();

// Crear controlador
$controller = new SaleController();

// Ruteo simple por GET/POST 'action'
$action = $_SERVER['REQUEST_METHOD'] === 'POST' ? ($_POST['action'] ?? '') : ($_GET['action'] ?? '');

// Decidir acción
if ($action === 'createSale' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->createSale($_POST);
} elseif ($action === 'processBooks' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->processBooks($_POST);
} else {
    // acción por defecto: mostrar formulario de clientes
    $controller->index();
}
