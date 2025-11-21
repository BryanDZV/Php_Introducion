<?php
session_start();
require_once "../datos/datos.php";
if (!isset($_SESSION["datoTipo"])) {
    header("Location: ../index.php");
}

$campos = $_SESSION["datoTipo"];
?>

<h2>Introduce los datos:</h2>
<form action="../controller.php" method="post">

    <?php foreach ($campos as $campo): ?>

        <label><?= ucfirst($campo) ?>:</label><br>

        <?php if ($campo === "color"): ?>

            <?php foreach ($colores as $nombre => $rgb): ?>
                <label>
                    <input type="radio" name="color" value="<?= $nombre ?>">
                    <?= $nombre ?>
                </label><br>
            <?php endforeach; ?>

        <?php else: ?>
            <input type="number" name="<?= $campo ?>" required><br>
        <?php endif; ?>

        <br>

    <?php endforeach; ?>

    <input type="submit" value="Generar figura">
</form>