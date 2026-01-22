<?php
$host = 'localhost';
$db   = 'tarea6';
$user = 'alumno';
$pass = 'alumno';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $sql = file_get_contents(__DIR__ . '/../src/Config/datosTablas.txt');

    try {
        $pdo->exec($sql);
        echo "Datos insertados correctamente";
    } catch (PDOException $e) {

        // Código 23000 = violación de clave / duplicados
        if ($e->getCode() === '23000') {
            echo " Los datos ya estaban cargados. No se ha hecho nada.";
        } else {
            throw $e; // otro error sí es grave
        }
    }
} catch (PDOException $e) {
    die(" Error de conexión: " . $e->getMessage());
}
