<?php

namespace clases;

class Vehiculos
{
    protected $tipo = "defecto";
    protected $pais = "defecto";

    public function __construct($tipo, $pais)
    {
        $this->tipo = $tipo;
        $this->pais = $pais;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function __toString()
    {
        return "el objeto vehiculo con tipo :" . $this->getTipo() . " y pais " . $this->getPais();
    }
}
