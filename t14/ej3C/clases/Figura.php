<?php

namespace clases;

abstract class Figura
{
    protected $color;
    protected $size;
    protected $nombre;

    public function __construct($color, $size, $nombre = "")
    {
        $this->color = $color;
        $this->size = (int)$size;
        $this->nombre = $nombre;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function __toString()
    {
        return "Figura: {$this->nombre}, color=" . implode(",", $this->color) . ", size={$this->size}";
    }

    abstract public function getClase();
    abstract public function getPerimetro();
    abstract public function getArea();
    abstract public function dibujar($ruta = null);
}
