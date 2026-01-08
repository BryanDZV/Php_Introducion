<?php

namespace Src\Class;

use PDO;

class Database
{
    private static PDO $conexion = null;

    public static function getConexion(): PDO
    {
        if (self::$conexion === null) {
            self::$conexion = new PDO(
                "mysql:host=localhost;dbname=libros;",
                "root",
                ""
            );

            self::$conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }

        return self::$conexion;
    }
}
