<?php
if (isset($_POST["fondo"]) && isset($_POST["idioma"])) {
    $fondo = $_POST["fondo"];
    $idioma = $_POST["idioma"];
    setcookie("fondo_actual", $fondo, time() + 10);
    setcookie("idioma_actual", $idioma, time() + 10);

    header("Location:introducirCV.php");
} else {
    $error = "error al recibir datos en porcesar.php";
    header("Location:index.php?error=$error");
}
