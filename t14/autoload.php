<?php

spl_autoload_register(function ($class) {
    // var_dump($class);
    echo "AUTOLOAD INTENTANDO CARGAR: $class<br>";
    $dir = __DIR__ . "/";
    $path = __DIR__ . "/" . str_replace("\\", "/", $class) . ".php";

    echo "RUTA GENERADA: $path<br>";
    // echo "ruta DIR: " . $dir . "<br>";

    if (file_exists($path)) {
        echo "ARCHIVO ENCONTRADO <br>";
        require_once $path;
    } else {
        echo "ARCHIVO NO ENCONTRADO <br>";
    }
    echo "**********************************<br>";
});
