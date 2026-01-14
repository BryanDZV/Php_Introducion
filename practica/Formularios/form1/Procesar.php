<?php

$redirigir = false;
$parametro = "";

if (!isset($_POST["nombre"]) || !isset($_POST["edad"])) {

    $parametro = "error=" . urlencode("acceso incorrecto");
    $redirigir = true;
} else {

    $nombre = trim(strip_tags($_POST["nombre"]));
    $edad   = trim(strip_tags($_POST["edad"]));

    if (empty($nombre) || empty($edad)) {

        $parametro = "error=" . urlencode("faltan datos");
        $redirigir = true;
    } elseif (!is_numeric($edad)) {

        $parametro = "error=" . urlencode("edad no válida");
        $redirigir = true;
    } elseif ($edad < 18) {

        $parametro = "error=" . urlencode("es menor de edad");
        $redirigir = true;
    } else {

        $parametro = "mensaje=" . urlencode("acceso permitido");
        $redirigir = true;
    }
}

if ($redirigir) {
    header("Location: index.php?$parametro");
}
