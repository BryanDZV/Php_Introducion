<?php
$parametro = "";
if (!isset($_POST["nombre"]) || !isset($_POST["edad"])) {
    $parametro = urlencode("faltan datos");
} else {
    $nombre = trim(strip_tags($_POST["nombre"]));
    $edad = trim(strip_tags($_POST["edad"]));
    if (!empty($nombre) && is_numeric($edad)) {
        $nuevo = ["nombre" => $nombre, "edad" => $edad];
        //existe
        if (file_exists("./archivoJson.json")) {
            $file = file_get_contents("./archivoJson.json");
            //array
            $stringJsonArray = json_decode($file, true);
        } else {
            //creamos una rray vacio
            $stringJsonArray = [];
        }
        //añadir
        $stringJsonArray[] = $nuevo;
        //guardar
        $json = json_encode($stringJsonArray);
        file_put_contents("./archivoJson.json", $json);

        $mensaje = urlencode("los registros son:");
    } else {


        $parametro = urlencode("datos no validos");
    }
}

if ($parametro != "") {
    header("Location:./index.php?parametro=" . $parametro);
} elseif (isset($mensaje) && !empty($mensaje)) {
    header("Location:./index.php?mensaje=" . $mensaje);
}
