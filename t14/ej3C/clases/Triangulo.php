<?php

namespace clases;

class Triangulo extends Figura
{
    private $ladoA;
    private $ladoB;
    private $ladoC;

    public function __construct($color, $size, $ladoA, $ladoB, $ladoC)
    {
        parent::__construct($color, $size, "Triángulo");
        $this->ladoA = (float)$ladoA;
        $this->ladoB = (float)$ladoB;
        $this->ladoC = (float)$ladoC;
    }

    public function getClase()
    {
        return "Triángulo";
    }

    public function getPerimetro()
    {
        return $this->ladoA + $this->ladoB + $this->ladoC;
    }

    public function getArea()
    {
        $s = $this->getPerimetro() / 2;
        return sqrt($s * ($s - $this->ladoA) * ($s - $this->ladoB) * ($s - $this->ladoC));
    }

    public function dibujar($ruta = null)
    {
        if ($ruta === null) {
            $ruta = "img/" . strtolower("triangulo") . "_" . time() . ".png";
        }

        $img = imagecreatetruecolor($this->size, $this->size);

        // Fondo blanco
        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);


        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // Triángulo 
        $x1 = $this->size / 2;
        $y1 = 10;                 // punta arriba
        $x2 = 10;
        $y2 = $this->size - 10;   // base izquierda
        $x3 = $this->size - 10;
        $y3 = $this->size - 10;   // base derecha

        $puntos = [$x1, $y1, $x2, $y2, $x3, $y3];

        imagefilledpolygon($img, $puntos, 3, $colorGD);

        imagepng($img, $ruta);


        return $ruta;
    }
}
