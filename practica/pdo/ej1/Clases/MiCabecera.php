<?php
class MiCabecera
{

    private $saludo = "Hola";
    private $nombre = "bryan";
    public function __construct($saludo, $nombre)
    {
        $this->saludo = $saludo;
        $this->nombre = $nombre;
    }

    public function getSaludo()
    {
        return $this->saludo;
    }

    public function setSaludo($saludo): void
    {
        $this->saludo = $saludo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function __toString(): string
    {
        return $this->saludo . ", " . $this->nombre;
    }
}
