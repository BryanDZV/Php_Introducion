<?php

namespace Bryan\Libros\Models;

use Bryan\Libros\Config\DataBase;

class BookModel
{
    private $db;

    public function __construct()
    {
        $this->db = DataBase::getInstance()->getConexion();
    }

    public function getAll()
    {
        $sql = "SELECT id, title, price, stock FROM book";
        return $this->db->query($sql)->fetchAll();
    }
}
