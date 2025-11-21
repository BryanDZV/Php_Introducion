<?php
session_start();

if (empty($_SESSION["resultado"])) {
    header("Location: ../index.php?error=" . urlencode("No hay resultado para mostrar"));
    return;
}

$resultado = $_SESSION["resultado"];
$tipo       = $resultado["tipo"];
$area       = $resultado["area"];
$perimetro  = $resultado["perimetro"];
$color      = $resultado["color"];
$size       = $resultado["size"];
$rutaImagen = $resultado["rutaImagen"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado figura</title>
</head>

<body>
    <h1>Resultado de la figura: <?= htmlspecialchars(ucfirst($tipo)) ?></h1>

    <p>Color: <?= implode(", ", $color) ?></p>

    <p>Size (lienzo): <?= htmlspecialchars($size) ?> px</p>
    <p>Área: <?= $area ?></p>
    <p>Perímetro: <?= $perimetro ?></p>

    <h2>Dibujo generado (GD)</h2>
    <?php if (!empty($rutaImagen)): ?>
        <img src="../<?= htmlspecialchars($rutaImagen) ?>" alt="Figura dibujada">
    <?php else: ?>
        <p>No se pudo generar la imagen.</p>
    <?php endif; ?>

    <br><br>
    <a href="../index.php">Volver a empezar</a>
    <a href="../logout.php">Cerrar sesión</a>

</body>

</html>