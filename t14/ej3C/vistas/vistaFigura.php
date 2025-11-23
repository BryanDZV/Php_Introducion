<?php
session_start();

/*
    ENTRADA:
    Este archivo solo puede funcionar si existe $_SESSION["resultado"],
    que fue guardado por controller.php después de crear la figura.

    Si no existe (porque el usuario entró sin pasar por los pasos anteriores),
    redirigimos a index.php.
*/

if (empty($_SESSION["resultado"])) {
    header("Location: ./index.php?error=No+hay+resultado");
    // No return ni exit, la redirección ya termina el flujo natural.
} else {
    $resultado = $_SESSION["resultado"];

    // Convertimos el color (array RGB) a texto para mostrarlo
    $color = implode(", ", $resultado["color"]);
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Figura generada</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">

        <!-- Título -->
        <h1>Resultado: <?= ucfirst($resultado["tipo"]) ?></h1>

        <!-- Caja con resultados numéricos -->
        <div class="result-box">
            <p>Perímetro: <?= $resultado["perimetro"] ?> cm</p>
            <p>Área: <?= $resultado["area"] ?> cm²</p>
            <p>Color (RGB): <?= $color ?></p>
        </div>

        <!-- Imagen generada por la clase -->
        <?php if (!empty($resultado["rutaImagen"])): ?>
            <img src="../<?= htmlspecialchars($resultado["rutaImagen"]) ?>" alt="Figura generada">
        <?php else: ?>
            <p>No se pudo generar la imagen.</p>
        <?php endif; ?>

        <br>

        <!-- Enlace para reiniciar -->
        <a href="../logout.php" class="button">Reiniciar</a>

    </div>
</body>

</html>