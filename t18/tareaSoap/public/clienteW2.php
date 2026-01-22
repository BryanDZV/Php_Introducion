<?php
require_once __DIR__ . '/../vendor/autoload.php';

$cliente = new \Src\Operaciones();

echo $cliente->getPVP('PROD1');
