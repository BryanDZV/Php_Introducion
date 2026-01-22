<?php
require_once __DIR__ . '/../vendor/autoload.php';

$cliente = new \Bryan\TareaSoap\Operaciones();

echo "<pre>";
echo "PVP: " . $cliente->getPVP('PROD1');
echo "</pre>";
