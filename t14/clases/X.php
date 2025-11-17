<?php

namespace clases;

class X
{
    private $nombre = "pedro";

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function __toString(): string
    {
        return $this->nombre;
    }
}
