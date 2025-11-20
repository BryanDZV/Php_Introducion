<?php

namespace clases;

abstract class Figura
{
    protected $name;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }


    public function __construct($name)

    {
        $this->name = $name;
    }

    public function mostrarInfo()
    {
        return "el nombre es: " . $this->name . "  " . "el area es " . $this->calcularArea();
    }
    abstract public function calcularArea();
}
