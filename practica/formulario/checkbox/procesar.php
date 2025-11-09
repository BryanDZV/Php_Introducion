<?php
// require "./variables.php"; // Si no la necesitas, puedes quitarla.

if (isset($_POST["check"]) && is_array($_POST["check"])) {
    $check = $_POST["check"];
    $checkEncode = json_encode($_POST["check"]);
    header("Location: mostrar.php?datos=" . urlencode($checkEncode));
} else {
    // Si la casilla no está marcada
    $error = "Tienes que elegir una opción";
    header("Location: index.php?error=" . urlencode($error));
}
