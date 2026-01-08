<?php

namespace Src\Class;

use PDO;
use Exception;

class Venta
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConexion(); //aqui me conecto al crear el objeto con el constructor
    }

    public function Insercion_venta_libro(int $clienteId, array $libros): void
    {
        try {
            //  Empezar transacción
            $this->db->beginTransaction();

            //  Insertar venta
            $stmt = $this->db->prepare(
                "INSERT INTO sale (customer_id, sale_date)
                 VALUES (:cliente, CURDATE())"
            );
            $stmt->execute(['cliente' => $clienteId]);

            $saleId = $this->db->lastInsertId();

            //  Insertar libros
            foreach ($libros as $idLibro) {

                // comprobar libro
                $check = $this->db->prepare(
                    "SELECT id FROM libros WHERE id = :id"
                );
                $check->execute(['id' => $idLibro]);

                if ($check->rowCount() === 0) {
                    throw new Exception("Libro $idLibro no existe");
                }

                // insertar relación
                $insert = $this->db->prepare(
                    "INSERT INTO sale_books (sale_id, book_id)
                     VALUES (:sale, :book)"
                );
                $insert->execute([
                    'sale' => $saleId,
                    'book' => $idLibro
                ]);
            }

            //  Confirmar
            $this->db->commit();
        } catch (Exception $e) {
            // Cancelar todo
            $this->db->rollback();
            throw $e;
        }
    }
}
