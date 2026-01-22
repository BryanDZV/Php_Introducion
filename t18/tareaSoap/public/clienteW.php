<?php
$cliente = new SoapClient(
    'http://localhost/tareaSoap/servidorSoap/servicio.wsdl'
);

echo $cliente->getPVP('PROD1');
print_r($cliente->getFamilias());
