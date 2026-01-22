<?php

namespace Bryan\TareaSoap;

use Bryan\TareaSoap\Config\Conexion;

class Producto
{
    public static function getPVP(string $cod): float
    {
        $db = Conexion::conectar();
        $stmt = $db->prepare("SELECT PVP FROM productos WHERE cod = ?");
        $stmt->execute([$cod]);
        return (float)$stmt->fetchColumn();
    }
}
