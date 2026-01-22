<?php

namespace Bryan\TareaSoap;

use Bryan\TareaSoap\Config\Conexion;

class Stock
{
    public static function getStock(string $producto, string $tienda): int
    {
        $db = Conexion::conectar();
        $stmt = $db->prepare(
            "SELECT unidades FROM stock WHERE producto = ? AND tienda = ?"
        );
        $stmt->execute([$producto, $tienda]);
        return (int)$stmt->fetchColumn();
    }
}
