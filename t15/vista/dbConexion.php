<?php
session_start();
require_once "../autload.php";

use clases\Conexion;

// Si NO existe la sesión → volver al index
if (!isset($_SESSION["datosConexion"])) {
    header("Location: ../index.php");
    exit;
}

// Obtener valores de la sesión
$datos = $_SESSION["datosConexion"];

// Crear la conexión usando tu clase
$conexion = new Conexion(
    $datos["host"],
    $datos["user"],
    $datos["pass"],
    $datos["dataBase"]
);
// echo "<pre>";
// print_r($_SESSION["datosConexion"]);
// echo "</pre>";


// Intentar conectar
$con = $conexion->conectar();

if (!$con) {
    die("Error conectando a la base de datos.");
}

// SI TODO SALE BIEN
echo "CONEXIÓN EXITOSA";
echo "<br><br>";
echo "<a href='../consultas/select.php'>Ir a consultas</a>";
echo "<a href='../logout.php'>Cerrar sesión</a>";


// Cerrar conexión
$conexion->cerrar();
