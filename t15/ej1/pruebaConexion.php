<?php
require_once "./autload.php";

session_start();

use Clases\Conexion;

if (!isset($_SESSION["datosConexion"])) {
    die("No hay datos de conexión en la sesión.");
}

$datos = $_SESSION["datosConexion"];

$conexion = new Conexion(
    $datos["host"],
    $datos["user"],
    $datos["pass"],
    $datos["dataBase"]
);

$con = $conexion->conectar();

echo " Conexión correcta con mysqli.";

$conexion->cerrar();
