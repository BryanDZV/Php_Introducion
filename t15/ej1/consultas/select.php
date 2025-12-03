<?php
session_start();
require_once "../autload.php";

use clases\Conexion;

// Si NO existen los datos de conexión → vuelves al formulario
if (!isset($_SESSION["datosConexion"])) {
    header("Location: ../formulario.php");
} else {
    $datos = $_SESSION["datosConexion"];

    // Crear conexión
    $conexion = new Conexion(
        $datos["host"],
        $datos["user"],
        $datos["pass"],
        $datos["dataBase"]
    );

    echo "<pre>";
    print_r($datos);
    echo "</pre>";


    $con = $conexion->conectar();

    // Consulta
    $sql = "SELECT * FROM book";
    $res = mysqli_query($con, $sql);

    echo "<h2>Listado de libros</h2>";

    while ($fila = mysqli_fetch_assoc($res)) {
        echo $fila["id"] . " - " . $fila["title"] . "<br>";
    }

    echo "<a href='../logout.php'>Cerrar sesión</a>";
}
