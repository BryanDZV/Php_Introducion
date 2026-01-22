<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

$generator = new Generator();
$generator->generate(
    new Config([
        'inputFile'     => 'http://localhost/php_introducion/t18/tareaSoap/servidorSoap/servicio.wsdl',
        'outputDir'     => __DIR__ . '/../src/Clases1',
        'namespaceName' => 'Src\\Clases1'
    ])
);

echo "Clases generadas correctamente";
