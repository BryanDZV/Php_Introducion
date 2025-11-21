<?php
session_start();
require_once "../datos/datos.php";
if (!isset($_SESSION["datoTipo"])) {
    header("Location: ../index.php");
    return;
}
$campos = $_SESSION["datoTipo"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos figura</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">

        <h2>Introduce los datos:</h2>
        <form action="../controller.php" method="post">

            <?php foreach ($campos as $campo): ?>
                <label><?= ucfirst($campo) ?>:</label>

                <?php if ($campo === "color"): ?>
                    <?php foreach ($colores as $nombre => $rgb): ?>
                        <label>
                            <input type="radio" name="color" value="<?= $nombre  ?>"> <?= ucfirst($nombre)  ?>
                        </label><br>
                    <?php endforeach; ?>
                <?php else: ?>
                    <input type="number" name="<?= $campo ?>" required>
                <?php endif; ?>

            <?php endforeach; ?>

            <button type="submit" class="button">Generar figura</button>
        </form>

    </div>
</body>

</html>