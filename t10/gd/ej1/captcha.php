<?php
require "./funciones.php";
if (isset($_POST["dato"])) {
    $dato = $_POST["dato"];
} else {
    $error = "error";
    header("Location:index.php?error=$error");
}
// 2. Cargar imagen 
$imagen = imagecreatefromjpeg("./img/fondo.jpeg");

letra($imagen, $dato);

// 5. Cabecera OBLIGATORIA Le dice al navegador que este archivo es una imagen, no HTML
header("Content-type: image/jpeg");
// 6. Mostrar la imagen final
imagejpeg($imagen);
// 7. Liberar memoria
imagedestroy($imagen);
