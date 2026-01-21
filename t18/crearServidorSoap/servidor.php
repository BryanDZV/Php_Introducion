<?php
class Operaciones
{
    public function suma($a, $b)
    {
        return $a + $b;
    }
    public function saludo($nombre)
    {
        return "Hola $nombre";
    }
}

$server = new SoapServer(null, [
    'uri' => 'http://localhost/servicio'
]);

$server->setClass('Operaciones');
$server->handle();
