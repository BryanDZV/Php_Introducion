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

// Borrar el libro con ID = 3
$sql = "DELETE FROM book WHERE id = 3";

if (mysqli_query($con, $sql)) {
    echo "Libro borrado correctamente";
} else {
    echo "Error: " . mysqli_error($con);
}

$conexion->cerrar();
