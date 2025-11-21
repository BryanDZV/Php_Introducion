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
            $ruta = "img/triangulo_" . time() . ".png";
        }
        //escalo 1cm =10px
        $escala = 10;
        $ladoPx = min(450, $this->ladoA * $escala);

        $img = imagecreatetruecolor($ladoPx + 40, $ladoPx + 40);

        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // Coordenadas del triángulo equilátero
        $p1 = [20, 20 + $ladoPx];
        $p2 = [20 + $ladoPx, 20 + $ladoPx];
        $p3 = [20 + ($ladoPx / 2), 20];

        $points = [
            (int)$p1[0],
            (int)$p1[1],
            (int)$p2[0],
            (int)$p2[1],
            (int)$p3[0],
            (int)$p3[1],
        ];

        imagefilledpolygon($img, $points, 3, $colorGD);

        imagepng($img, $ruta);


        return $ruta;
    }
}
