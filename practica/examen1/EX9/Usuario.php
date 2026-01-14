<?php
class Usuario
{

    private $nombre;
    private $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    public function __toString(): string
    {
        return $this->nombre . ", " . $this->edad;
    }

    public function esMayorEdad()
    {
        return $this->edad > 18;
    }
}
