<?php
$cliente = new SoapClient(null, [
    'location' => 'http://localhost/php_introducion/t18/tareaSoap/servidorSoap/servicio.php',
    'uri'      => 'http://localhost/php_introducion/t18/tareaSoap/servidorSoap'
]);

echo $cliente->__soapCall('getPVP', ['PROD1']);
