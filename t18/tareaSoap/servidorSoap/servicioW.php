<?php
require_once __DIR__ . '/../vendor/autoload.php';

$server = new SoapServer(__DIR__ . '/servicio.wsdl');
$server->setClass(\Src\Operaciones::class);
$server->handle();
