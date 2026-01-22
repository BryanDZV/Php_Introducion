<?php

namespace Config;

use PDO;

class Conexion
{
    public static function conectar(): PDO
    {
        return new PDO(
            "mysql:host=localhost;dbname=tarea6;charset=utf8",
            "alumno",
            "alumno",
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }
}
