<?php
$parametro = "";
$mensaje = "";
if (isset($_POST["eliminar"]) && isset($_POST["id"])) {

    $id = $_POST["id"];
    if (file_exists("./usuarios.json")) {
        $file = file_get_contents("./usuarios.json");
        $jsonArray = json_decode($file, true);
        if (is_array($jsonArray)) {
            foreach ($jsonArray as $key => $value) {
                if ($value["id"] == $id) {
                    unset($jsonArray[$key]);
                    $jsonArray = array_values($jsonArray);

                    file_put_contents("./usuarios.json", json_encode($jsonArray));
                    $mensaje = urlencode("borrado exitoso");
                }
            }
        }
    }
} elseif (!isset($_POST["nombre"]) || !isset($_POST["edad"])) {
    $parametro = urlencode("acceso incorrecto");
} else {
    $nombre = trim(strip_tags($_POST["nombre"]));
    $edad = trim(strip_tags($_POST["edad"]));
    if (empty($nombre)) {
        $parametro = urlencode("faltan datos");
    } else {
        if (!is_numeric($edad)) {
            $parametro = urlencode("datos no validos");
        } else {
            $nuevo = [];

            if (file_exists("./usuarios.json")) {
                $contenido = file_get_contents("./usuarios.json");
                $arrayUser = json_decode($contenido, true);

                if (is_array($arrayUser)) {
                    $nuevo = $arrayUser;
                }
            }

            $nuevoId = 1;

            if (count($nuevo) > 0) {
                $ultimo = end($nuevo);
                $nuevoId = $ultimo["id"] + 1;
            }

            $nuevo[] = [
                "id" => $nuevoId,
                "nombre" => $nombre,
                "edad" => $edad
            ];

            file_put_contents("./usuarios.json", json_encode($nuevo));

            $mensaje = urlencode("Guardados con exito");
        }
    }
}

if ($parametro != "") {
    header("Location:./index.php?parametro=" . $parametro);
} elseif ($mensaje != "") {
    header("Location:./index.php?mensaje=" . $mensaje);
}
