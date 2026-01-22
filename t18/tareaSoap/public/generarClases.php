<?php

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

require_once __DIR__ . '/../vendor/autoload.php';

$generator = new Generator();
$generator->generate(
    new Config([
        'inputFile' => 'http://localhost/tareaSoap/servidorSoap/servicio.wsdl',
        'outputDir' => '../src/Clases1',
        'namespaceName' => 'Src\\Clases1'
    ])
);
