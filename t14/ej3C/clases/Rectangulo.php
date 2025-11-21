<?php

namespace clases;

class Rectangulo extends Figura
{
    private $base;
    private $altura;

    public function __construct($color, $size, $base, $altura)
    {
        parent::__construct($color, $size, "Rectángulo");
        $this->base = (float)$base;
        $this->altura = (float)$altura;
    }

    public function getClase()
    {
        return "Rectángulo";
    }

    public function getPerimetro()
    {
        return 2 * ($this->base + $this->altura);
    }

    public function getArea()
    {
        return $this->base * $this->altura;
    }

    public function dibujar($ruta = null)
    {
        if ($ruta === null) {
            $ruta = "img/" . strtolower("rectangulo") . "_" . time() . ".png";
        }

        $img = imagecreatetruecolor($this->size, $this->size);


        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // Escalado para que entre en la imagen
        $basePx = min($this->size - 20, $this->base);
        $alturaPx = min($this->size - 20, $this->altura);


        $x1 = (int)(($this->size - $basePx) / 2);
        $y1 = (int)(($this->size - $alturaPx) / 2);
        $x2 = (int)($x1 + $basePx);
        $y2 = (int)($y1 + $alturaPx);


        imagefilledrectangle($img, $x1, $y1, $x2, $y2, $colorGD);

        imagepng($img, $ruta);

        return $ruta;
    }
}
