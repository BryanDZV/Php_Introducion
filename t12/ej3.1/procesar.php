<?php
require "./variables.php";

if (isset($_POST["fondo"]) && isset($_POST["idioma"])) {
    // 1️⃣ Crear el array con la configuración
    $arr = [
        "fondo" => $_POST["fondo"],
        "idioma" => $_POST["idioma"]
    ];

    // 2️⃣ Guardarlo como JSON en una sola cookie
    setcookie("config", json_encode($arr), time() + 3600);

    // 3️⃣ Redirigir
    header("Location: curriculum.php");
    exit;
} elseif (isset($_POST["borrar_cookies"])) {
    // Borrar la cookie de configuración
    setcookie("config", "", time() - 3600);
    header("Location:index.php");
    exit;
} else {
    $error = "Debes seleccionar fondo e idioma.";
    header("Location:index.php?error=$error");
    exit;
}
