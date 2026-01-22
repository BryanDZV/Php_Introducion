<?php

namespace Src;

use Config\Conexion;

class Stock
{
    public static function getStock(string $prod, string $tienda): int
    {
        $db = Conexion::conectar();
        $stmt = $db->prepare(
            "SELECT unidades FROM stock WHERE producto = ? AND tienda = ?"
        );
        $stmt->execute([$prod, $tienda]);
        return (int)$stmt->fetchColumn();
    }
}
