<?php

namespace Bryan\Crud\Config;

use Exception;
use PDO;

class DataBase
{
    private static $instance = null;
    private $conexion;

    private function __construct()
    {
        try {
            $dns = "mysql:dbname=tienda;host=localhost;";
            $this->conexion = new PDO("$dns", "root", "");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "coNEXION EXITOSA";
        } catch (Exception $e) {
            $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
