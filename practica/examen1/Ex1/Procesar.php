<?php
$parametro = "";
if (!isset($_POST["nombre"]) || !isset($_POST["edad"])) {
    $parametro = urlencode("acceso incorrecto");
} else {
    $nombre = trim(strip_tags($_POST["nombre"]));
    $edad = trim(strip_tags($_POST["edad"]));
    if (empty($nombre) || empty($edad)) {
        $parametro = urlencode("faltan datos");
    } else {
        if (!is_numeric($edad)) {
            $parametro = urldecode("edad no valida");
        } else {
            if ($edad < 18) {
                $parametro = urlencode("acceso no permitido a menores");
            } else {
                $parametro = urlencode("acceso permitido");
            }
        }
    }
}
header("Location:./index.php?parametro=" . $parametro);
