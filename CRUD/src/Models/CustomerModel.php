<?php

namespace Bryan\Crud\Models;

use Bryan\Crud\Config\DataBase;
use PDO;

class CustomerModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = DataBase::getInstance()->getConexion();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM customers WHERE custid = :id";
        $stm = $this->conexion->prepare($sql);
        $stm->execute([":id" => $id]);

        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM customers";
        $stm = $this->conexion->query($sql);
        return $stm->fetchAll();
    }
    //id	firstname	surname	email	type
    public function create($custid, $cname, $email, $phone, $address)
    {
        $sql = "INSERT INTO customers (custid,cname,email,phone,address)
        VALUES(:custid,:cname,:email,:phone,:address)";

        $stm = $this->conexion->prepare($sql);
        return $stm->execute([":custid" => $custid, ":cname" => $cname, ":email" => $email, ":phone" => $phone, ":address" => $address]);
    }

    public function update($custid, $cname, $email, $phone, $addres)
    {
        $sql = "UPDATE customers SET (custid=:custid,cname=:cname,email=:email,phone=:phone,addres=:addres) WHERE custid=:custid";
        $stm = $this->conexion->prepare($sql);
        return $stm->execute([":custid" => $custid, ":cname" => $cname, ":email" => $email, ":phone" => $phone, ":addres" => $addres]);
    }
    public function delete($custid)
    {
        $sql = "DELETE FROM customers WHERE custid=:custid";
        $stm = $this->conexion->prepare($sql);
        return $stm->execute([
            ":custid" => $custid
        ]);
    }
}
