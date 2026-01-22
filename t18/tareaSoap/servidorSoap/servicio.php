<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Bryan\TareaSoap\Operaciones;

$server = new SoapServer(null, [
    'uri' => 'http://localhost/php_introducion/t18/tareaSoap/servidorSoap'
]);

$server->setClass(Operaciones::class);
$server->handle();
