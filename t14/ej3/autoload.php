<?php

spl_autoload_register(function ($class) {
    // var_dump($class);
    $path = __DIR__ . "/" . str_replace("\\", "/", $class) . ".php";

    echo "RUTA GENERADA: $path<br>";

    if (file_exists($path)) {
        echo "ARCHIVO ENCONTRADO <br>";
        echo "**********************************<br>";
        require_once $path;
    } else {
        echo "ARCHIVO NO ENCONTRADO <br>";
        echo "**********************************<br>";
    }
});
