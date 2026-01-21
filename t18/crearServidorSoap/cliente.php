<?php

$cliente = new SoapClient(null, [
    //ruta
    'location' => 'http://localhost/Php_Introducion/t18/crearServidorSoap/servidor.php',
    'uri'      => 'http://localhost/servicio'
]);

try {
    $cliente->suma(1, 2);
} catch (SoapFault $e) {
}

echo $cliente->saludo("Ana");
