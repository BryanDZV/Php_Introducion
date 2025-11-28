<?php
require_once "./autload.php";

use clases\Conexion;

$con = new mysqli("localhost", "root", "", "base_de_datos");

if ($con->connect_errno) {
    echo "Error conectando: " . $con->connect_error;
    die();
}

echo "Conexión correcta!";

//mysqli_close($con); para cerrar la conexion
