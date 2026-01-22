<?php

namespace Src;

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
    public function getStock(string $prod, string $tienda): int
    {
        return Stock::getStock($prod, $tienda);
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
    /**
     * @soap
     */
    public function getProductosFamilia(string $familia): array
    {
        $db = \Config\Conexion::conectar();

        $stmt = $db->prepare(
            "SELECT cod FROM productos WHERE familia = ?"
        );
        $stmt->execute([$familia]);

        return $stmt->fetchAll(\PDO::FETCH_COLUMN);
    }
}
