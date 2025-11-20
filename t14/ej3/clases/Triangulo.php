<?php

namespace Clases;

class Triangulo extends Figura
{

    private $ladoA;
    private $ladoB;
    private $ladoC;

    public function __construct($nombre, $ladoA, $ladoB, $ladoC, $color, $size)
    {
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
        $this->ladoC = $ladoC;
        parent::__construct($nombre, $color, $size);
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getLadoA()
    {
        return $this->ladoA;
    }

    public function setLadoA($ladoA): void
    {
        $this->ladoA = $ladoA;
    }

    public function getLadoB()
    {
        return $this->ladoB;
    }

    public function setLadoB($ladoB): void
    {
        $this->ladoB = $ladoB;
    }

    public function getLadoC()
    {
        return $this->ladoC;
    }

    public function setLadoC($ladoC): void
    {
        $this->ladoC = $ladoC;
    }

    public function __toString(): string
    {
        return $this->nombre . ", " . $this->ladoA . ", " . $this->ladoB . ", " . $this->ladoC;
    }



    //implementaciones
    public function getClase()
    {
        return $this->nombre;
    }
    public function getPerimetro()
    {
        return $this->ladoA + $this->ladoB + $this->ladoC;
    }

    public function getArea()
    { //heron 3 lados conocidos
        $s = $this->getPerimetro() / 2;
        return sqrt($s * ($s - $this->ladoA) * ($s - $this->ladoB) * ($s - $this->ladoC));
    }


    //funciones propias

}
