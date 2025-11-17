<?php

namespace clases;

class Perro extends Animal
{




    private $edad = 0;
    private $sonidoPersonal = "guaauu PERsonal";
    public function __construct($edad, $nombre)

    {
        parent::__construct($nombre);
        $this->edad = $edad;
    }
    //sobreescribir el metodo del padre 

    public function getSonido()
    {

        $sonidoPadre = parent::getSonido();
        return  "soy el padre mas el hijo   -->>>> " . $sonidoPadre . "   " . $this->sonidoPersonal;
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
        return $this->edad;
    }
}
