<?php

namespace Bryan\Libros\Models;

use Bryan\Libros\Config\DataBase;

class CustomerModel
{
    private $db;

    /*
        Al crear el modelo obtenemos la conexión
    */
    public function __construct()
    {
        $this->db = DataBase::getInstance()->getConexion();
    }

    /*
        Obtener todos los clientes
    */
    public function getAll()
    {
        $sql = "SELECT id, firstname, surname, email, type FROM customer";

        $resultado = $this->db->query($sql);

        return $resultado->fetchAll();
    }

    /*
        Insertar cliente
    */
    public function create($id, $firstname, $surname, $email, $type)
    {
        $sql = "
            INSERT INTO customer
            (id, firstname, surname, email, type)
            VALUES
            (:id, :firstname, :surname, :email, :type)
        ";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':id'        => $id,
            ':firstname' => $firstname,
            ':surname'  => $surname,
            ':email'    => $email,
            ':type'     => $type
        ]);
    }
}
