<?php

namespace Bryan\Libros\Models;

use Bryan\Libros\config\DataBase;
use PDO;

class BookModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = DataBase::getInstance()->getConexion();
    }

    public function getAll(): array
    {
        return $this->db->query("SELECT id, title FROM book")->fetchAll();
    }

    public function exists(int $bookId): bool
    {
        $stmt = $this->db->prepare("SELECT id FROM book WHERE id = :id");
        $stmt->execute(['id' => $bookId]);
        return $stmt->rowCount() > 0;
    }
}
