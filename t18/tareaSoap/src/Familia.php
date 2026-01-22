<?php

namespace Src;

use Config\Conexion;

class Familia
{
    public static function getFamilias(): array
    {
        $db = Conexion::conectar();
        return $db->query("SELECT cod FROM familias")
            ->fetchAll(\PDO::FETCH_COLUMN);
    }
}
