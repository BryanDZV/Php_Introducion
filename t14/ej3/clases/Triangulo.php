<?php

namespace Clases;

class Triangulo extends Figura
{
    /*
  
     */
    private $nombre = "triangulo";
    private $ladoA;
    private $ladoB;
    private $ladoC;

    private $area;
    private $perimetro;


    public function getClase()
    {
        return $this->nombre;
    }
}
