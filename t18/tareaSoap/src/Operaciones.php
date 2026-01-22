<?php

namespace Bryan\TareaSoap;

use Bryan\TareaSoap\Producto;
use Bryan\TareaSoap\Familia;
use Bryan\TareaSoap\Stock;
use Bryan\TareaSoap\Config\Conexion;

/**
 * @soap
 */
class Operaciones
{

    /**
     * @soap
     */
    public function getPVP(string $cod): float
    {
        return Producto::getPVP($cod);
    }

    /**
     * @soap
     */
    public function getStock(string $producto, string $tienda): int
    {
        return Stock::getStock($producto, $tienda);
    }

    /**
     * @soap
     */
    public function getFamilias(): array
    {
        return Familia::getFamilias();
    }

    /**
     * @soap
     */
    public function getProductosFamilia(string $familia): array
    {
        $db = Conexion::conectar();
        $stmt = $db->prepare(
            "SELECT cod FROM productos WHERE familia = ?"
        );
        $stmt->execute([$familia]);
        return $stmt->fetchAll(\PDO::FETCH_COLUMN);
    }
}
