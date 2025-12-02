<?php
session_start();
require_once "../autload.php";

use clases\Conexion;

if (isset($_SESSION["datosConexion"])) {
    $con = new mysqli($_SESSION["datosConexion"]["host"], $_SESSION["datosConexion"]["user"], $_SESSION["datosConexion"]["pass"], $_SESSION["datosConexion"]["dataBase"]);
    if ($con->connect_errno) {
        echo "Error conectando: " . $con->connect_error;
        die();
    } else {
        echo "CONEXION EXITOSA";
    }
} else {
    $error = "ingresa datos primero";
    header("Location:../index.php");
}
mysqli_close($con); //para cerrar la conexion