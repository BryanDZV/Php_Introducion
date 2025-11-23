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

        // 1. Definir escala
        $escala = 10;

        // 2. Calcular radio en píxeles
        $radioPx = $this->radio * $escala;
        // El ancho total de la imagen será el diámetro (radio * 2)
        $diametroPx = $radioPx * 2;

        // Opcional: Limitar tamaño máximo como en triángulo
        // $diametroPx = min(450, $radioPx * 2);
        // $radioPx = $diametroPx / 2;

        // 3. Crear imagen dinámica (+40px de margen total)
        $img = imagecreatetruecolor($diametroPx + 40, $diametroPx + 40);

        // 4. Fondo blanco
        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        // 5. Color
        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // 6. Calcular centro (mitad de la imagen)
        $cx = ($diametroPx + 40) / 2;
        $cy = ($diametroPx + 40) / 2;

        // Dibujar círculo relleno (imagefilledellipse usa diámetro, no radio)
        imagefilledellipse($img, (int)$cx, (int)$cy, (int)($radioPx * 2), (int)($radioPx * 2), $colorGD);

        imagepng($img, $ruta);

        return $ruta;
    }
}
