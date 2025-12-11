<?php

namespace App\Model;

use App\Config\Config;
use PDO;
use PDOException;

class Database
{
    private static ?PDO $pdo = null;

    public static function getConnection(): PDO
    {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO(Config::DSN, Config::USER, Config::PASS);
                // Opciones según la teoría: excepciones y fetch asociativo
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                // Mostrar error conforme a la teoría (no die/exit)
                echo 'Error de conexión: ' . htmlspecialchars($e->getMessage());
            }
        }
        return self::$pdo;
    }
}
