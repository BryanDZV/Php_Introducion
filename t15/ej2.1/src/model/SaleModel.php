<?php

namespace App\Model;

use PDO;
use Exception;

class SaleModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    // Devuelve todos los clientes para el select
    public function getAllCustomers(): array
    {
        $stmt = $this->db->query('SELECT id, firstname, surname FROM customer');
        return $stmt->fetchAll();
    }

    // Devuelve todos los libros para el select múltiple
    public function getAllBooks(): array
    {
        $stmt = $this->db->query('SELECT id, title, stock, price FROM book');
        return $stmt->fetchAll();
    }

    // Inserta una fila en sale y devuelve el id insertado
    public function createSale(int $customerId): int
    {
        $stmt = $this->db->prepare('INSERT INTO sale (customer_id, `date`) VALUES (:cid, :d)');
        $stmt->execute([
            ':cid' => $customerId,
            ':d'   => date('Y-m-d H:i:s')
        ]);
        return (int)$this->db->lastInsertId();
    }

    /**
     * Inserta filas en sale_book para una venta existente.
     * Comprueba que cada book_id exista; si alguno no existe -> lanza Exception y NO hace commit.
     * $saleId: id de la venta ya creada.
     * $books: array de book ids (enteros)
     * $quantities: array asociativo [bookId => cantidad]
     */
    public function addBooksToSale(int $saleId, array $books, array $quantities = []): void
    {
        try {
            $this->db->beginTransaction();

            $checkStmt  = $this->db->prepare('SELECT id FROM book WHERE id = :bid');
            $insertStmt = $this->db->prepare('INSERT INTO sale_book (book_id, sale_id, amount) VALUES (:bid, :sid, :amt)');

            foreach ($books as $bookId) {
                $b = (int)$bookId;
                // comprobar existencia
                $checkStmt->execute([':bid' => $b]);
                $found = $checkStmt->fetch();
                if (!$found) {
                    // Si un libro no existe, lanzar excepción y realizar rollback.
                    throw new Exception("El libro con id $b no existe.");
                }
                // cantidad por defecto 1 si no viene o es <=0
                $qty = (isset($quantities[$b]) && intval($quantities[$b]) > 0) ? intval($quantities[$b]) : 1;
                $insertStmt->execute([
                    ':bid' => $b,
                    ':sid' => $saleId,
                    ':amt' => $qty
                ]);
            }

            $this->db->commit();
        } catch (Exception $e) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }
            // Re-lanzar para que el controlador muestre el error
            throw $e;
        }
    }
}
