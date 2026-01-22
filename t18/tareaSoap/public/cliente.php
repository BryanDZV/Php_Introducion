<?php
$cliente = new SoapClient(null, [
    'location' => 'http://localhost/tareaSoap/servidorSoap/servicio.php',
    'uri' => 'http://localhost/tareaSoap/servidorSoap'
]);

echo $cliente->__soapCall('getPVP', ['PROD1']);
echo $cliente->__soapCall('getStock', ['PROD1', 'TIENDA1']);
print_r($cliente->__soapCall('getFamilias', []));
