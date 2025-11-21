<?php
session_start();
if (empty($_SESSION["resultado"])) {
    header("Location: ../index.php?error=No+hay+resultado");
    return;
}
$resultado = $_SESSION["resultado"];
$color = implode(", ", $resultado["color"]);
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

        <h1>Resultado: <?= ucfirst($resultado["tipo"]) ?></h1>

        <div class="result-box">
            <p>Área: <?= $resultado["area"] ?></p>
            <p>Perímetro: <?= $resultado["perimetro"] ?></p>
            <p>Color: <?= $color ?></p>
        </div>

        <?php if (!empty($resultado["rutaImagen"])): ?>
            <img src="../<?= htmlspecialchars($resultado["rutaImagen"]) ?>" alt="Figura generada">
        <?php else: ?>
            <p>No se pudo generar la imagen.</p>
        <?php endif; ?>

        <br>
        <a href="../logout.php" class="button">Reiniciar</a>

    </div>
</body>

</html>