<?php
session_start();
require_once "./autload.php";

use clases\Conexion;

if (
    empty($_POST["host"]) && empty($_POST["user"]) &&
    empty($_POST["pass"]) && empty($_POST["dataBase"])
) {

    header("Location:index.php");
} else {
    $datosConexion = [];

    $_SESSION["datosConexion"];
}
