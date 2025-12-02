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

// Consulta
$sql = "SELECT * FROM book";
$res = mysqli_query($con, $sql);

// Mostrar datos
echo "<h2>Listado de libros</h2>";

while ($fila = mysqli_fetch_assoc($res)) {
    echo $fila["id"] . " - " . $fila["title"] . " (" . $fila["author"] . ")<br>";
}

$conexion->cerrar();
