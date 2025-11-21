<?php

namespace clases;

class Cuadrado extends Figura
{
    private $lado;

    public function __construct($color, $size, $lado)
    {
        parent::__construct($color, $size, "Cuadrado");
        $this->lado = (float)$lado;
    }

    public function getClase()
    {
        return "Cuadrado";
    }

    public function getPerimetro()
    {
        return 4 * $this->lado;
    }

    public function getArea()
    {
        return $this->lado * $this->lado;
    }

    public function dibujar($ruta = null)
    {
        if ($ruta === null) {
            $ruta = "img/cuadrado_" . time() . ".png";
        }

        $escala = 10; // 1 cm = 10 px
        $ladoPx = min(450, $this->lado * $escala);

        $img = imagecreatetruecolor($ladoPx + 40, $ladoPx + 40);

        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        imagefilledrectangle($img, 20, 20, 20 + $ladoPx, 20 + $ladoPx, $colorGD);

        imagepng($img, $ruta);


        return $ruta;
    }
}
