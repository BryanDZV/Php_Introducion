<?php
$host = 'localhost';
$user = 'root';      // root SOLO para crear BD y usuario
$pass = '';          // en WAMP suele estar vacío

try {
    // Conexión SIN base de datos
    $pdo = new PDO(
        "mysql:host=$host;charset=utf8mb4",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Leemos el archivo SQL
    $sql = file_get_contents(__DIR__ . '/../src/Config/BaseDatos.txt');

    // Ejecutamos TODO el script
    $pdo->exec($sql);

    echo " Base de datos y tablas creadas correctamente";
} catch (PDOException $e) {
    die(" Error: " . $e->getMessage());
}
