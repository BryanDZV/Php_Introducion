<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Bryan\TareaSoap\Config\Conexion;

$pdo = Conexion::conectar();

$stmt = $pdo->query("SELECT nombre FROM productos LIMIT 3");
$productos = $stmt->fetchAll(PDO::FETCH_COLUMN);

echo "<pre>";
print_r($productos);
