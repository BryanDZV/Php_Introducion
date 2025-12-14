<?php

namespace App\Core;

// Autoload sencillo: App\Module\Class -> src/Module/Class.php
class Autoload
{
    public static function register(): void
    {
        spl_autoload_register(function ($class) {
            $prefix = 'App\\';
            if (strpos($class, $prefix) !== 0) {
                return;
            }
            $relative = substr($class, strlen($prefix));
            $file = __DIR__ . '/../' . str_replace('\\', '/', $relative) . '.php';
            if (is_file($file)) {
                require_once $file;
            }
        });
    }
}
