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

// Actualizar libro con ID = 1
$sql = "UPDATE book SET stock = 99, price = 1.99 WHERE id = 1";

if (mysqli_query($con, $sql)) {
    echo "Libro actualizado correctamente";
} else {
    echo "Error: " . mysqli_error($con);
}

$conexion->cerrar();
