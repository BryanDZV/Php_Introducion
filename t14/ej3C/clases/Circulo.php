<?php

namespace clases;

class Circulo extends Figura
{
    private $radio;

    public function __construct($color, $size, $radio)
    {
        parent::__construct($color, $size, "Círculo");
        $this->radio = (float)$radio;
    }

    public function getClase()
    {
        return "Circulo";
    }
    public function getPerimetro()
    {
        return 2 * pi() * $this->radio;
    }
    public function getArea()
    {
        return pi() * ($this->radio ** 2);
    }

    public function dibujar($ruta = null)
    {
        if ($ruta === null) {
            $ruta = "img/" . strtolower("circulo") . "_" . time() . ".png";
        }

        $escala = 10;

        $radioPx = $this->radio * $escala;
        $diametroPx = $radioPx * 2;

        // Creamos la imagen del tamaño exacto del diámetro
        $img = imagecreatetruecolor($diametroPx, $diametroPx);

        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // El centro exacto es la mitad del ancho y alto
        $cx = $diametroPx / 2;
        $cy = $diametroPx / 2;

        imagefilledellipse($img, $cx, $cy, $diametroPx, $diametroPx, $colorGD);

        imagepng($img, $ruta);
        return $ruta;
    }
}
