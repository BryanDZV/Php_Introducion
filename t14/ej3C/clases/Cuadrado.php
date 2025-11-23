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

        // Calculamos el lado en píxeles.
        // Mantenemos tu función min() por seguridad para que no sea gigante
        $ladoPx = min(450, $this->lado * $escala);

        // 1. Crear imagen del tamaño EXACTO (Quitamos el +40)
        $img = imagecreatetruecolor($ladoPx, $ladoPx);

        // Fondo blanco
        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        // Color
        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // 2. Dibujar rectángulo lleno desde la esquina 0,0 hasta el final
        // x1, y1 = 0, 0 (Esquina superior izquierda)
        // x2, y2 = $ladoPx, $ladoPx (Esquina inferior derecha)
        imagefilledrectangle($img, 0, 0, $ladoPx, $ladoPx, $colorGD);

        imagepng($img, $ruta);

        return $ruta;
    }
}
