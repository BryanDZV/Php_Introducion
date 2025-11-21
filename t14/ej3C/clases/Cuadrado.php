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
            $ruta = "img/" . strtolower("cuadrado") . "_" . time() . ".png";
        }

        $img = imagecreatetruecolor($this->size, $this->size);

        // Color de la figura
        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // Dimensiones centradas
        $ladoPx = min($this->size - 20, $this->lado);
        $x1 = ($this->size - $ladoPx) / 2;
        $y1 = ($this->size - $ladoPx) / 2;

        imagefilledrectangle($img, $x1, $y1, $x1 + $ladoPx, $y1 + $ladoPx, $colorGD);

        imagepng($img, $ruta);


        return $ruta;
    }
}
