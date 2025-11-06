<?php
require "variables.php";

if (isset($_POST["fondo"]) && isset($_POST["idioma"])) {
    setcookie("fondo_actual", $_POST["fondo"], time() + 600);
    setcookie("idioma_actual", $_POST["idioma"], time() + 600);
    header("Location:introducirCV.php");
} elseif (isset($_POST["borrar_cookies"])) {
    setcookie("fondo_actual", "", time() - 600);
    setcookie("idioma_actual", "", time() - 600);
    header("Location:index.php");
} else {
    $error = "Debes seleccionar fondo e idioma.";
    header("Location:index.php?error=$error");
}
