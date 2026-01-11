<?php

namespace Bryan\Libros\Models;

use Bryan\Libros\Config\DataBase;
use Exception;

class SaleModel
{
    private $db;

    public function __construct()
    {
        $this->db = DataBase::getInstance()->getConexion();
    }

    /*
        Insercion_venta_libro (1, [id => cantidad])
    */
    public function insercion_venta_libro($clienteId, $libros)
    {
        // 1. Iniciar transacción
        $this->db->beginTransaction();

        // 2. Insertar venta
        $sqlSale = "
            INSERT INTO sale (customer_id, date)
            VALUES (:cliente, NOW())
        ";
        $stmtSale = $this->db->prepare($sqlSale);
        $stmtSale->execute([
            ':cliente' => $clienteId
        ]);

        $saleId = $this->db->lastInsertId();

        // 3. Procesar libros
        foreach ($libros as $bookId => $cantidad) {

            if ($cantidad > 0) {

                // 3.1 Comprobar libro y stock
                $sqlCheck = "
                    SELECT stock 
                    FROM book 
                    WHERE id = :id
                ";
                $stmtCheck = $this->db->prepare($sqlCheck);
                $stmtCheck->execute([
                    ':id' => $bookId
                ]);

                $libro = $stmtCheck->fetch();

                if (!$libro) {
                    $this->db->rollBack();
                    throw new Exception("Libro $bookId no existe");
                }

                if ($cantidad > $libro['stock']) {
                    $this->db->rollBack();
                    throw new Exception("Stock insuficiente del libro $bookId");
                }

                // 3.2 Insertar en sale_book
                $sqlSaleBook = "
                    INSERT INTO sale_book (book_id, sale_id, amount)
                    VALUES (:book, :sale, :amount)
                ";
                $stmtSaleBook = $this->db->prepare($sqlSaleBook);
                $stmtSaleBook->execute([
                    ':book'   => $bookId,
                    ':sale'   => $saleId,
                    ':amount' => $cantidad
                ]);

                // 3.3 Reducir stock
                $sqlUpdate = "
                    UPDATE book
                    SET stock = stock - :cantidad
                    WHERE id = :id
                ";
                $stmtUpdate = $this->db->prepare($sqlUpdate);
                $stmtUpdate->execute([
                    ':cantidad' => $cantidad,
                    ':id'       => $bookId
                ]);
            }
        }

        // 4. Confirmar transacción
        $this->db->commit();
    }
}
