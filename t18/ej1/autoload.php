<?php
spl_autoload_register(function ($class) {
    $file = __DIR__ . "/src/" . str_replace("\\", "/", $class) . ".php";
    echo "CONEXIO----->" . $file;
    if (is_file($file)) {
        require_once $file;
    } else {
        echo "<br>  namespace incorrecto";
    }
});
