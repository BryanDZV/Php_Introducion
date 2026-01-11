<?php

namespace Bryan\Libros\Config;

use PDO;

class DataBase
{
    private static $instance = null;
    private $conexion;

    /*
        Constructor privado
        Se ejecuta una sola vez
    */
    private function __construct()
    {
        $this->conexion = new PDO(
            "mysql:dbname=libros;host=localhost",
            "root",
            ""
        );

        $this->conexion->setAttribute(
            PDO::ATTR_DEFAULT_FETCH_MODE,
            PDO::FETCH_ASSOC
        );
    }

    /*
        Devuelve siempre la misma instancia
    */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DataBase();
        }

        return self::$instance;
    }

    /*
        Devuelve la conexión PDO
    */
    public function getConexion()
    {
        return $this->conexion;
    }
}
