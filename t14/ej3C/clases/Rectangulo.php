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

        $escala = 10; // 1cm = 10px

        // Calculamos el tamaño exacto en píxeles
        $basePx = $this->base * $escala;
        $alturaPx = $this->altura * $escala;

        // Creamos la imagen del TAMAÑO EXACTO (sin sumar 40)
        $img = imagecreatetruecolor($basePx, $alturaPx);

        // Fondo blanco
        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        // Color de la figura
        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // Dibujamos desde la esquina superior izquierda (0, 0)
        // hasta la esquina inferior derecha ($basePx, $alturaPx)
        imagefilledrectangle($img, 0, 0, $basePx, $alturaPx, $colorGD);

        imagepng($img, $ruta);
        return $ruta;
    }
}
