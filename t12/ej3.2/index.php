<?php
require "variables.php";
require "funciones.php";

if (isset($_COOKIE["fondo_actual"]) && isset($_COOKIE["idioma_actual"])) {
    header("Location:introducirCV.php");
} elseif (isset($_GET["error"])) {
    $error = $_GET["error"];
} else {
    $error = "No hay cookies Guardadas.";
}
$colores = obtenerColores();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración CV</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Configuración Inicial</h1>
    <h2 style="color:red"><?php if (!empty($error)) {
                                echo $error;
                            } ?></h2>
    <form action="procesar.php" method="post">
        <h2>Selecciona Color de Fondo</h2>
        <?php foreach ($colores as $clave => $valor): ?>
            <input type="radio" name="fondo" value="<?= $clave ?>"> <?= $valor ?>
        <?php endforeach; ?>

        <h2>Selecciona Idioma</h2>
        <input type="radio" name="idioma" value="es"> Español
        <input type="radio" name="idioma" value="en"> Inglés
        <input type="radio" name="idioma" value="fr"> Francés

        <p><button type="submit">Empezar CV</button></p>
    </form>
</body>

</html>