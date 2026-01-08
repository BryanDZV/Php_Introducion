<?php

namespace Bryan\Login\Model;

use PDO;
use PDOException;

class BD
{
    private $user = "root";
    private $password = "";
    private $host = "localhost";
    private $dbname = "tienda";
    private $conexion;
    private static $instancia = null;
    private function __construct()
    {
        $this->conectar();
    }

    private function conectar()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
        try {
            $this->conexion = new PDO(
                $dsn,
                $this->user,
                $this->password
            );

            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            echo "conexion exitosa";
        } catch (PDOException $e) {
            die("error de conexion" . $e->getMessage());
        }
    }

    public static function getInstace()
    {
        if (self::$instancia === null) {
            self::$instancia = new self(); //es equivalente a poner new BD();
        };

        return self::$instancia;
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
