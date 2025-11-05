<?php
require "./variables.php";
if (isset($_POST["fondo"]) && isset($_POST["idioma"])) {
    $fondo_actual = $_POST["fondo"];
    $idioma_actual = $_POST["idioma"];
    setcookie("fondo_actual", $fondo_actual, time() + 60);
    setcookie("idioma_actual", $idioma_actual, time() + 60);

    header("Location:introducirCV.php");
} elseif (isset($_POST["borrar_cookies"])) {
    setcookie("fondo_actual", $fondo_actual, time() - 60);
    setcookie("idioma_actual", $idioma_actual, time() - 60);
    header("Location:index.php");
} else {
    $error = "Debes seleccionar fondo e idioma.";
    header("Location:index.php?error=$error");
}
