<?php
class Database
{

    private static string $host = "localhost";
    private static string $db   = "prueba";
    private static string $user = "root";
    private static string $pass = "";

    public static function getConexion(): PDO
    {

        try {
            //code...
            $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db;
            $pdo = new PDO($dsn, self::$user, self::$pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("" . $e->getMessage());
        }



        return $pdo;
    }
}
