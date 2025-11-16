<?php
require_once __DIR__ . '/MiCabecera.php';


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Juego del Ahorcado - Ejemplo POO</title>
</head>

<body>

    <?php
    $cabeceraAhorcado = new MiCabecera(
        "El Juego del Ahorcado",
        "Adivina la palabra.",
        "Clase POO - Ejercicio 1"
    );

    echo $cabeceraAhorcado;
    ?>

    <main>


    </main>

</body>

</html>