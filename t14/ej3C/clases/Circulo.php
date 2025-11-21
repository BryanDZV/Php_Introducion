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

        // Crear imagen
        $img = imagecreatetruecolor($this->size, $this->size);

        // Fondo blanco
        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        // Convertir color
        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // Calcular centro y radio
        $cx = (int)($this->size / 2);
        $cy = (int)($this->size / 2);
        $radioPx = (int) max(5, min($this->radio, ($this->size - 20) / 2));

        // Dibujar círculo relleno
        imagefilledellipse($img, $cx, $cy, $radioPx * 2, $radioPx * 2, $colorGD);

        // Guardar la imagen
        imagepng($img, $ruta);


        return $ruta;
    }
}
