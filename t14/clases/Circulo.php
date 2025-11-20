<?php

namespace clases;

class Circulo extends Figura
{
    private $nombre = "circulozzz";
    private $lado = "";

    public function __construct($lado)
    {
        parent::__construct($this->nombre);
        $this->lado = $lado;
    }
    public function getLado()
    {
        return $this->lado;
    }
    public function setLado($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return pow($this->lado, 2);
    }
}
