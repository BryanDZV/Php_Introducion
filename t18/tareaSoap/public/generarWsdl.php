<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHP2WSDL\PHPClass2WSDL;

$wsdl = new PHPClass2WSDL(
    'Bryan\\TareaSoap\\Operaciones',
    'http://localhost/php_introducion/t18/tareaSoap/servidorSoap/servicioW.php'
);

$wsdl->generateWSDL(true);
$wsdl->save(__DIR__ . '/../servidorSoap/servicio.wsdl');

echo "WSDL generado correctamente";
