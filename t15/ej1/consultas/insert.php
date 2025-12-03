<?php
require_once "../autload.php";
session_start();

use clases\Conexion;

$datos = $_SESSION["datosConexion"];

$conexion = new Conexion(
    $datos["host"],
    $datos["user"],
    $datos["pass"],
    $datos["dataBase"]
);

$con = $conexion->conectar();

// Datos de prueba
$isbn = "999-9-99-999999";
$title = "Libro de Prueba Bryan";
$author = "Bryan";
$stock = 3;
$price = 12.50;

$sql = "INSERT INTO book (isbn, title, author, stock, price)
        VALUES ('$isbn', '$title', '$author', $stock, $price)";

if (mysqli_query($con, $sql)) {
    echo "Libro insertado correctamente";
} else {
    echo "Error: " . mysqli_error($con);
}

$conexion->cerrar();
