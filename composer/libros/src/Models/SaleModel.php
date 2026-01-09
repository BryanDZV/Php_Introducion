<?php


namespace Bryan\Libros\Models;

use Bryan\Libros\config\DataBase;
use Exception;
use PDO;

class SaleModel
{
    private PDO $db;
    private BookModel $bookModel;

    public function __construct()
    {
        $this->db = DataBase::getInstance()->getConexion();
        $this->bookModel = new BookModel();
    }

    /**
     * Inserción_venta_libro (1, [1 => 2, 2 => 1])
     */
    public function insercionVentaLibro(int $clienteId, array $libros): void
    {
        try {
            // 1️⃣ Transacción
            $this->db->beginTransaction();

            // 2️⃣ Insertar venta
            $stmtSale = $this->db->prepare(
                "INSERT INTO sale (customer_id, date) VALUES (:cliente, NOW())"
            );
            $stmtSale->execute(['cliente' => $clienteId]);

            $saleId = $this->db->lastInsertId();

            // 3️⃣ Insertar libros
            $stmtInsert = $this->db->prepare(
                "INSERT INTO sale_book (book_id, sale_id, amount)
                 VALUES (:book, :sale, :amount)"
            );

            foreach ($libros as $bookId => $cantidad) {

                if ($cantidad <= 0) continue;

                if (!$this->bookModel->exists($bookId)) {
                    throw new Exception("Libro $bookId no existe");
                }

                $stmtInsert->execute([
                    'book'   => $bookId,
                    'sale'   => $saleId,
                    'amount' => $cantidad
                ]);
            }

            // 4️⃣ Confirmar
            $this->db->commit();
        } catch (Exception $e) {
            $this->db->rollBack();
            throw $e;
        }
    }
}
