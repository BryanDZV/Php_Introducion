<?php
require __DIR__ . "/vendor/autoload.php";

use App\ContactoMvc\Controller\GmailController;

use Dotenv\Dotenv;

// CARGAR VARIABLES DE ENTORNO
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$controller = new GmailController();
$controller->gestionarEnvio();
