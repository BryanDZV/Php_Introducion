<?php

class Customer
{
    private static $lasid;

    private $nombre;
    private $edad;

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }


    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }



    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function __toString(): string
    {
        return $this->nombre;
    }


    public static function getLastid()
    {

        return self::$lasid;
    }

    public function getNombre()
    {

        return $this->nombre;
    }

    public function sumar($x)
    {
        $this->setEdad($x);
    }
}
