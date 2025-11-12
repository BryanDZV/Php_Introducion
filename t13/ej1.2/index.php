<?php
session_start();
require "./funciones.php";

// RUTA 1
if (empty($_SESSION["palabra"])) {
    header("Location:procesar.php");
}
// RUTA 2
else {

    $palabra        = $_SESSION["palabra"] ?? '';
    $palabraSecreta = $_SESSION["palabraSecreta"] ?? '';
    $erroresJ1      = $_SESSION["erroresJ1"] ?? 0;
    $aciertosJ1     = $_SESSION["aciertosJ1"] ?? 0;
    $erroresJ2      = $_SESSION["erroresJ2"] ?? 0;
    $aciertosJ2     = $_SESSION["aciertosJ2"] ?? 0;
    $turno          = $_SESSION["turno"] ?? 1;
    $letras_usadas  = $_SESSION["letras_usadas"] ?? [];

    $abecedario = abecedario()
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Ahorcado - 2 Jugadores</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Ahorcado - Dos Jugadores</h1>

        <p><strong class="<?php ($turno == 1) ? 'turno1' : 'turno2' ?>">Turno del jugador <?= $turno ?></strong></p>

        <?php if ($palabra === $palabraSecreta): ?>
            <h2>¡La palabra era "<?= strtoupper($palabra) ?>"!</h2>
            <p>Ganador: Jugador <?= $turno === 1 ? 2 : 1 ?></p>
        <?php elseif ($erroresJ1 >= 7 || $erroresJ2 >= 7): ?>
            <h2>Has perdido. La palabra era "<?= strtoupper($palabra) ?>"</h2>
        <?php endif; ?>

        <hp class="palabra"><?= implode(" ", str_split($palabraSecreta)) ?></hp>

        <div class="puntuacion-caja">
            <div class="caja">
                <div class="puntuacion">
                    <h2>Jugador 1</h2>
                    <p>Aciertos: <?= $aciertosJ1 ?></p>
                    <p>Errores: <?= $erroresJ1 ?></p>
                </div>
                <div class="imagen-error">
                    <?php for ($i = 1; $i <= 7; $i++):
                        if ($erroresJ1 === $i): ?>
                            <img src="img/<?= $i ?>.png" alt="ahorcado<?= $i ?>">
                    <?php endif;
                    endfor; ?>
                </div>
            </div>
            <form action="logout.php">
                <button class="reset">Reiniciar juego</button>

            </form>


            <div class="caja">
                <div class="puntuacion">
                    <h2>Jugador 2</h2>
                    <p>Aciertos: <?= $aciertosJ2 ?></p>
                    <p>Errores: <?= $erroresJ2 ?></p>
                </div>
                <div class="imagen-error">
                    <?php for ($i = 1; $i <= 7; $i++):
                        if ($erroresJ2 === $i): ?>
                            <img src="img/<?= $i ?>.png" alt="ahorcado<?= $i ?>">
                    <?php endif;
                    endfor; ?>
                </div>
            </div>
        </div>

        <div class="abecedario">
            <?php echo $abecedario ?>

        </div>

    </body>

    </html>
<?php

}
?>