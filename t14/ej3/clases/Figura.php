<?php

namespace Clases;

abstract class  Figura
{

    protected $color = "green";
    protected $size = 0;

    public function __construct($color, $size)
    {
        $this->color = $color;
        $this->size = $size;
    }
    abstract public function getClase();
    public function __toString()
    {
        return "estas en la clase::-->" . $this->getClase();
    }
}
