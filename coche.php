<?php

namespace app\models;

class Coche
{
    private $nombre = "toyota";
    private static $precio = 1200;

    public function __construct($nombre = null)
    {
        // Si no se pasa nombre, usar el valor por defecto
        if ($nombre === null) {
            $nombre = $this->nombre;
        } else {
            $this->nombre = $nombre;
        }
    }

    public function __toString()
    {
        return "desde __toString el nombre es:: " . $this->nombre;
    }

    public static function getPrecio()
    {
        return self::$precio;
    }
}
