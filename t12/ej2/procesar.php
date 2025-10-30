<?php
if (isset($_POST["fondo"]) && isset($_POST["idioma"])) {
    $fondo = $_POST["fondo"];
    $idioma = $_POST["idioma"];

    header("Location:introducirCV.php");
} else {
    $error = "error al recibir datos en porcesar.php";
    header("Location:index.php?error=$error");
}
