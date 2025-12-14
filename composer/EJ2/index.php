<?php
require "./config.php";

//creamos conexion pdo

try {
    //code...
    $db = new PDO(DBNAME, USER, PASSWORD);

    echo "conexion exitosa";
    // Configuramos el modo de devolución de resultados
    $db->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
} catch (Exception $e) {
    echo "" . $e->getMessage() . "";
}
