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

        // 1. Definir escala (1cm = 10px)
        $escala = 10;

        // 2. Calcular dimensiones en píxeles (con un tope de seguridad si quieres, como en triangulo)
        // Multiplicamos la medida real por la escala
        $basePx = $this->base * $escala;
        $alturaPx = $this->altura * $escala;

        // Opcional: Si quieres limitar el tamaño máximo como en triangulo (min 450)
        // $basePx = min(450, $this->base * $escala);
        // $alturaPx = min(450, $this->altura * $escala);

        // 3. Crear imagen con tamaño dinámico (+40px para margen)
        $img = imagecreatetruecolor($basePx + 40, $alturaPx + 40);

        // 4. Fondo blanco
        $blanco = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $blanco);

        // 5. Color de la figura
        $rgb = $this->color;
        $colorGD = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);

        // 6. Coordenadas (dejando 20px de margen a la izquierda y arriba)
        $x1 = 20;
        $y1 = 20;
        $x2 = 20 + $basePx;
        $y2 = 20 + $alturaPx;

        imagefilledrectangle($img, $x1, $y1, $x2, $y2, $colorGD);

        imagepng($img, $ruta);

        return $ruta;
    }
}
