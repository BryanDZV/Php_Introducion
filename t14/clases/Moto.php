<?php

namespace clases;


class Moto extends Vehiculos
{
    private $marca = "defecto";
    private $precio = 0;
    public function __construct($marca, $precio, $tipo, $pais)
    {
        parent::__construct($tipo, $pais);
        $this->marca = $marca;
        $this->precio = $precio;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    public function __toString(): string
    {
        return $this->marca . ", " . $this->precio . " ,y el tipo y pais es " . $this->getTipo() . " , " . $this->getPais();
    }
}
//sobreEscribir metodos
