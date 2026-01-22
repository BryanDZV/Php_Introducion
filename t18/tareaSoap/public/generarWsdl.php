<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHP2WSDL\PHPClass2WSDL;

$wsdl = new PHPClass2WSDL(
    'Src\\Operaciones',
    'http://localhost/tareaSoap/servidorSoap/servicioW.php'
);

$wsdl->generateWSDL(true);
$wsdl->save('../servidorSoap/servicio.wsdl');
