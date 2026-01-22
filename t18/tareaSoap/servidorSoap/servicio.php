<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Src\Operaciones;

$server = new SoapServer(null, [
    'uri' => 'http://localhost/tareaSoap/servidorSoap'
]);

$server->setClass(Operaciones::class);
$server->handle();
