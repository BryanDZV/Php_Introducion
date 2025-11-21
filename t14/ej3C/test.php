<?php
require_once "./autoload.php";
require __DIR__ . "../datos/datos.php";




use clases\Circulo;

$color = $colores["red"];

$cir = new Circulo(4, $color, 50, "pato");

echo $cir;              // prueba __toString()
echo "<br>Área: " . $cir->getArea();
echo "<br>Perímetro: " . $cir->getPerimetro();
echo "<br><br>Imagen generada:<br>";

// Generar imagen y obtener ruta
$rutaImagen = $cir->dibujar(); // dibujar() devuelve la ruta (output/circulo_123.png)

// Mostrar imagen en HTML
echo "<img src='$rutaImagen' alt='Círculo dibujado'>";
var_dump($figuras["cuadrado"]);
foreach ($figuras["cuadrado"] as $key => $value) { ?>
    <h1><?= $value ?></h1>
<?php }
