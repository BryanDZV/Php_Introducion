<?php
session_start();
require_once "../autload.php";

use clases\Conexion;

if (!isset($_SESSION["datosConexion"])) {
    header("Location: ../index.php");
} else {
    $datos = $_SESSION["datosConexion"];


    $conexion = new Conexion(
        $datos["host"],
        $datos["user"],
        $datos["pass"],
        $datos["dataBase"]
    );
    // echo "<pre>";
    // print_r($_SESSION["datosConexion"]);
    // echo "</pre>";


    try {
        $con = $conexion->conectar();


        echo "CONEXIÓN EXITOSA";
        echo "<br><br>";
        echo "<a href='../consultas/select.php'>Ir a consultas</a>";
        echo "<a href='../logout.php'>Cerrar sesión</a>";

        //$conexion->cerrar();
    } catch (Exception $e) {

        $error = $e->getMessage();
        header("Location:./formulario.php=error=$error");
    }
}
