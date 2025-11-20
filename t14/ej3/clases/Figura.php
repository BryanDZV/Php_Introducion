<?php

namespace Clases;

abstract class  Figura
{

    protected $color = "green";
    protected $size = 0;
    protected $nombre = "defecto";
    public function __construct($color, $size, $nombre)
    {
        $this->color = $color;
        $this->size = $size;
        $this->nombre = $nombre;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size): void
    {
        $this->size = $size;
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
        return $this->color . ", " . $this->size . ", " . $this->nombre . ",tu CLASE ES : " . $this->getClase();
    }

    abstract public function getClase();
    abstract public function getPerimetro();

    abstract public function getArea();
}
