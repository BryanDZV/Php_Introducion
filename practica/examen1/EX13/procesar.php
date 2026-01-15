<?php
$parametro = "";
if (!isset($_FILES["file"]) || !($_FILES["file"]["error"] === 0)) {
    $parametro = urlencode("no se subio correctamente");
} else {
    if (!is_dir("subidas")) {
        mkdir("subidas", 0777);
    }
    $nombre = $_FILES["file"]["name"];
    $temporal = $_FILES["file"]["tmp_name"];
    $extension = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
    var_dump($extension);
    $nombreUnico = time() . "_" . $nombre;
    $destino = "./subidas/" . $nombreUnico;
    $extensionPemitida = ["jpeg", "png"];;

    if (!in_array($extension, $extensionPemitida, true)) {

        $parametro = urlencode("formato no permitido");
    } else {
        move_uploaded_file($temporal, $destino);
        $parametro = urlencode("subida correctamente");
    }
}

if ($parametro != "") {
    header("Location:./index.php?parametro=" . $parametro);
}
