<?php

namespace clases;

class Animal
{
    protected $nombre = "defecto";
    protected $sonido = "defecto";
    public function __construct($nombre, $sonido = null)
    {
        if ($sonido === null) {
            $sonido = $this->sonido;
        } else {
            $this->sonido = $sonido;
        }
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getSonido()
    {
        return $this->sonido;
    }

    public function setSonido($sonido): void
    {
        $this->sonido = $sonido;
    }

    public function __toString(): string
    {
        return $this->nombre . ", " . $this->sonido;
    }
}
