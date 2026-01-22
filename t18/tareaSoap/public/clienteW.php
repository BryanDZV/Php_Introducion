<?php
$cliente = new SoapClient(
    'http://localhost/php_introducion/t18/tareaSoap/servidorSoap/servicio.wsdl'
);

echo $cliente->getPVP('PROD1');
