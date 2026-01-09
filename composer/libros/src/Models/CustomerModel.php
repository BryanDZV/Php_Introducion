<?php

namespace Bryan\Libros\Models;

use Bryan\Libros\config\DataBase;
use PDO;


class CustomerModel
{
    private PDO $conexion;

    public function __construct()
    {
        $this->conexion = DataBase::getInstance()->getConexion();
    }

    public function getAll(): array
    {


        return $this->conexion
            ->query("SELECT id, isbn, tit FROM customer")
            ->fetchAll();
    }

    public function create($id, $firstname, $surname, $email, $type)
    {
        $sql = "INSERT INTO customers (id, firstname, surname, email, type)
            VALUES (:id, :firstname, :surname, :email, :type)";

        $stm = $this->conexion->prepare($sql);
        return $stm->execute([
            ":id" => $id,
            ":firstname" => $firstname,
            ":surname" => $surname,
            ":email" => $email,
            ":type" => $type
        ]);
    }


    public function update($id, $firstname, $surname, $email, $type)
    {
        $sql = "UPDATE customers 
            SET firstname = :firstname,
                surname = :surname,
                email = :email,
                type = :type
            WHERE id = :id";

        $stm = $this->conexion->prepare($sql);
        return $stm->execute([
            ":id" => $id,
            ":firstname" => $firstname,
            ":surname" => $surname,
            ":email" => $email,
            ":type" => $type
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE id = :id";
        $stm = $this->conexion->prepare($sql);
        return $stm->execute([
            ":id" => $id
        ]);
    }
}
