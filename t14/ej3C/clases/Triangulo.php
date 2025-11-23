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

        $escala = 10;

        // Usaremos el ladoA como referencia para el tamaño
        $ladoPx = $this->ladoA * $escala;

        // Creamos un lienzo cuadrado del tamaño del lado
        $img = imagecreatetruecolor($ladoPx, $ladoPx);

        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // Coordenadas SIN márgenes (Asumiendo triángulo equilátero visualmente)

        // Punto 1: Esquina inferior izquierda (0, abajo del todo)
        $p1x = 0;
        $p1y = $ladoPx;

        // Punto 2: Esquina inferior derecha (ancho máximo, abajo del todo)
        $p2x = $ladoPx;
        $p2y = $ladoPx;

        // Punto 3: Centro arriba (mitad del ancho, arriba del todo - coordenada 0)
        $p3x = $ladoPx / 2;
        $p3y = 0;

        $points = [
            (int)$p1x,
            (int)$p1y,
            (int)$p2x,
            (int)$p2y,
            (int)$p3x,
            (int)$p3y,
        ];

        imagefilledpolygon($img, $points, 3, $colorGD);

        imagepng($img, $ruta);
        return $ruta;
    }
}
