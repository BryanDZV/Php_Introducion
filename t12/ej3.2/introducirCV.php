<?php
require "./funciones.php";
require "./variables.php";

if (!isset($_COOKIE["fondo_actual"]) || !isset($_COOKIE["idioma_actual"])) {
    header("Location:index.php?error=Configura Primero el Fondo e Idioma.");
}

$fondo_actual = $_COOKIE["fondo_actual"];
$idioma_actual = $_COOKIE["idioma_actual"];
$traduccionActual = obtenerTraduccion($idioma_actual);

$aficiones = cargarJSON("./data/aficiones.json");
$idiomas_extra = cargarJSON("./data/idiomas.json");
$sexos = cargarJSON("./data/sexos.json");
?>

<!DOCTYPE html>
<html lang="<?= $idioma_actual ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $traduccionActual["titulo"] ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:<?= $fondo_actual ?>;">

    <h1><?= $traduccionActual["titulo"] ?></h1>
    <form action="cv.php" method="post" enctype="multipart/form-data">
        <h2><?= $traduccionActual["datos"] ?></h2>

        <p><label><?= $traduccionActual["nombre"] ?>:</label>
            <input type="text" name="nombre" required>
        </p>

        <p><label><?= $traduccionActual["direccion"] ?>:</label>
            <input type="text" name="direccion" required>
        </p>

        <p><label><?= $traduccionActual["fecha"] ?>:</label>
            <input type="date" name="fecha" required>
        </p>

        <p><label><?= $traduccionActual["telefono"] ?>:</label>
            <input type="tel" name="telefono" required>
        </p>

        <p><label><?= $traduccionActual["email"] ?>:</label>
            <input type="email" name="email" required>
        </p>

        <p><label><?= $traduccionActual["foto"] ?>:</label>
            <input type="file" name="foto" required>
        </p>

        <h2><?= $traduccionActual["formacion"] ?></h2>
        <textarea name="formacion" rows="4" cols="40" required></textarea>

        <h2><?= $traduccionActual["experiencia"] ?></h2>
        <textarea name="experiencia" rows="4" cols="40" required></textarea>

        <h2><?= $traduccionActual["idiomas"] ?></h2>
        <?php foreach ($idiomas_extra as $i): ?>
            <input type="checkbox" name="idioma_extra[]" value="<?= $i ?>"> <?= $i ?>
        <?php endforeach; ?>

        <h2><?= $traduccionActual["sexo"] ?></h2>
        <?php foreach ($sexos as $s): ?>
            <input type="radio" name="sexo" value="<?= $s ?>" required> <?= $s ?>
        <?php endforeach; ?>

        <h2><?= $traduccionActual["aficiones"] ?></h2>
        <select multiple name="aficiones[]" size="5" required>
            <?php foreach ($aficiones as $a): ?>
                <option value="<?= strtolower($a) ?>"><?= $a ?></option>
            <?php endforeach; ?>
        </select>

        <p><input type="submit" value="<?= $traduccionActual["generar"] ?>"></p>
    </form>

    <form action="procesar.php" method="post">
        <button type="submit" name="borrar_cookies">Borrar Cookies</button>
    </form>
</body>

</html>