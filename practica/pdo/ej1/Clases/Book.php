<?php
class Book
{
    public $autor;
    private $titulo;
    private $isb;
    public function __construct($autor, $titulo, $isb)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->isb = $isb;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getIsb()
    {
        return $this->isb;
    }

    public function setIsb($isb): void
    {
        $this->isb = $isb;
    }

    public function __toString(): string
    {
        return $this->autor . ", " . $this->titulo . ", " . $this->isb;
    }
}
