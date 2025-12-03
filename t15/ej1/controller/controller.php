<?php
session_start();
require_once "../autload.php";

use clases\Conexion;

if (
    empty($_POST["host"]) && empty($_POST["user"]) &&
    empty($_POST["pass"]) && empty($_POST["dataBase"])
) {
    $error = "DEBES RELLENAR LOS CAMPOS";

    header("Location:../index.php?error=$error");
} else {
    $datosConexion = [
        "host"     => $_POST["host"],
        "user"     => $_POST["user"],
        "pass"     => $_POST["pass"],
        "dataBase" => $_POST["dataBase"]
    ];


    $_SESSION["datosConexion"] = $datosConexion;
    header("Location:../index.php");
}
