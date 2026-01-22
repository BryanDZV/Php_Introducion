<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Bryan\TareaSoap\Operaciones;

$server = new SoapServer(__DIR__ . '/servicio.wsdl');
$server->setClass(Operaciones::class);
$server->handle();
