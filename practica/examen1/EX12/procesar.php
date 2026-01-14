<?php
$parametro = "";
if (!isset($_POST["nombre"]) || !isset($_POST["edad"])) {
    $parametro = urlencode("faltan datos");
} else {
    $nombre = trim(strip_tags($_POST["nombre"]));
    $edad = trim(strip_tags($_POST["edad"]));
    if (!empty($nombre) && is_numeric($edad)) {
        if (file_exists("./archivoJson")) {
            $file = ":/archivoJson";
            $stringJsonArray = json_decode($file, true);
            $stringJsonArray = ["nombre" => $nombre, "edad" => $edad];
            $mensaje = urlencode("los registros son:");
        } else {
            $parametro = urlencode("no existe archivo");
        }
    } else {


        $parametro = urlencode("datos no validos");
    }
}

if ($parametro != "") {
    header("Location:./index.php?parametro=" . $parametro);
} elseif (isset($mensaje) && !empty($mensaje)) {
    header("Location:./index.php?mensaje=" . $mensaje);
}
