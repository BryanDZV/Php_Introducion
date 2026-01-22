<?php

namespace Config;

use PDO;
use PDOException;

class BaseDatos
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=localhost",
                "root",
                "",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            die("Error conexión: " . $e->getMessage());
        }
    }

    /**
     * Ejecuta un archivo SQL completo (CREATE, USE, INSERT, etc.)
     */
    public function ejecutarArchivoSQL(string $rutaArchivo): void
    {
        if (!file_exists($rutaArchivo)) {
            die("No existe el archivo: $rutaArchivo");
        }

        $sql = file_get_contents($rutaArchivo);

        // Separar sentencias por ;
        $sentencias = explode(";", $sql);

        foreach ($sentencias as $sentencia) {
            $sentencia = trim($sentencia);
            if ($sentencia !== "") {
                $this->pdo->exec($sentencia);
            }
        }
    }
}
