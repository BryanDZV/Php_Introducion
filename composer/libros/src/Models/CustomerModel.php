<?php

namespace Bryan\Libros\Models;

use Bryan\Libros\Config\DataBase;

class CustomerModel
{
    private $db;


    public function __construct()
    {
        $this->db = DataBase::getInstance()->getConexion();
    }


    public function getAll()
    {
        $sql = "SELECT id, firstname, surname, email, type FROM customer";

        $resultado = $this->db->query($sql);

        return $resultado->fetchAll();
    }


    public function create($firstname, $surname, $email, $type, $password)
    {

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "
            INSERT INTO customer
            (firstname, surname, email, type,password)
            VALUES
            (:firstname, :surname, :email, :type,:password)
        ";


        $stmt = $this->db->prepare($sql);


        return $stmt->execute([
            ':firstname' => $firstname,
            ':surname'  => $surname,
            ':email'    => $email,
            ':password' => $hash,
            ':type'     => $type
        ]);
    }
    public function getEmailById($id)
    {
        $sql = "SELECT email FROM customer WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);

        $resultado = $stmt->fetch();

        if ($resultado) {
            return $resultado['email'];
        } else {
            return null;
        }
    }
}
