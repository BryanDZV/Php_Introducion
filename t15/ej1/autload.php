<?php
spl_autoload_register(function ($class) {

    // Convertir namespaces a rutas
    $path = __DIR__ . "/" . str_replace("\\", "/", $class) . ".php";

    if (file_exists($path)) {
        require_once $path;
    } else {
        echo "archivo no ENCONTRADO EN AUTOLOAD → $path";
    }
});
