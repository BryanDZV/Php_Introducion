<?php
session_start();
require "./funciones.php";
$_SESSION["palabra"] = "";
$_SESSION["palabraSecreta"] = "";
if (empty($_SESSION["palabra"])) {
    $palabra = obtenerPalabra();
    $_SESSION["palabra"] = $palabra;
    $palabraSecreta = palabraGuion($palabra);
    $_SESSION["palabraSecreta"] = $palabraSecreta;
    header("Location:index.php");
} else {
    header("Location:index.php");
}
