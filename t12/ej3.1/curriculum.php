<?php
require "./funciones.php";
require "./variables.php";

// 1️⃣ Comprobar que existe la cookie de configuración
if (!isset($_COOKIE["config"])) {
    header("Location:index.php");
    exit;
}

// 2️⃣ Decodificar la cookie JSON
$config = json_decode($_COOKIE["config"], true);
$fondo_actual = $config["fondo"];
$idioma_actual = $config["idioma"];
$traduccionActual = obtenerDatos($idioma_actual);
?>

<!DOCTYPE html>
<html lang="<?= $idioma_actual ?>">

<head>
    <meta charset="UTF-8">
    <title><?= $traduccionActual["titulo"] ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body style="background-color:<?= $fondo_actual ?>">

    <h1><?= $traduccionActual["titulo"] ?></h1>

    <form action="cv.php" method="post" enctype="multipart/form-data">

        <h2><?= $traduccionActual["datos"] ?></h2>
        <p>
            <label><?= $traduccionActual["nombre"] ?></label>
            <input type="text" name="nombre" required>
        </p>
        <p>
            <label><?= $traduccionActual["direccion"] ?></label>
            <input type="text" name="direccion" required>
        </p>
        <p>
            <label><?= $traduccionActual["fecha"] ?></label>
            <input type="date" name="fecha" required>
        </p>
        <p>
            <label><?= $traduccionActual["telefono"] ?></label>
            <input type="tel" name="telefono" required>
        </p>
        <p>
            <label><?= $traduccionActual["email"] ?></label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label><?= $traduccionActual["foto"] ?></label>
            <input type="file" name="foto" required>
        </p>

        <h2><?= $traduccionActual["formacion_titulo"] ?></h2>
        <p>
            <label><?= $traduccionActual["formacion_texto"] ?></label><br>
            <textarea name="formacion" rows="4" cols="40" required></textarea>
        </p>

        <h2><?= $traduccionActual["experiencia_titulo"] ?></h2>
        <p>
            <label><?= $traduccionActual["experiencia_texto"] ?></label><br>
            <textarea name="experiencia" rows="4" cols="40" required></textarea>
        </p>

        <h2><?= $traduccionActual["idiomas_titulo"] ?></h2>
        <p>
            <input type="checkbox" name="idioma[]" value="<?= $traduccionActual["idioma_ingles"] ?>"> <?= $traduccionActual["idioma_ingles"] ?>
            <input type="checkbox" name="idioma[]" value="<?= $traduccionActual["idioma_frances"] ?>"> <?= $traduccionActual["idioma_frances"] ?>
            <input type="checkbox" name="idioma[]" value="<?= $traduccionActual["idioma_aleman"] ?>"> <?= $traduccionActual["idioma_aleman"] ?>
        </p>

        <h2><?= $traduccionActual["sexo_titulo"] ?></h2>
        <p>
            <input type="radio" name="sexo" value="<?= $traduccionActual["sexo_femenino"] ?>" required> <?= $traduccionActual["sexo_femenino"] ?>
            <input type="radio" name="sexo" value="<?= $traduccionActual["sexo_masculino"] ?>" required> <?= $traduccionActual["sexo_masculino"] ?>
        </p>

        <h2><?= $traduccionActual["aficiones_titulo"] ?></h2>
        <p>
            <label><?= $traduccionActual["aficiones_texto"] ?></label><br>
            <select multiple name="aficiones[]" required size="5">
                <option value="<?= $traduccionActual["aficiones_op1"] ?>"><?= $traduccionActual["aficiones_op1"] ?></option>
                <option value="<?= $traduccionActual["aficiones_op2"] ?>"><?= $traduccionActual["aficiones_op2"] ?></option>
                <option value="<?= $traduccionActual["aficiones_op3"] ?>"><?= $traduccionActual["aficiones_op3"] ?></option>
            </select>
        </p>

        <p><input type="submit" value="<?= $traduccionActual["boton"] ?>"></p>
    </form>

    <form action="procesar.php" method="post">
        <button type="submit" name="borrar_cookies" value="1">Borrar Cookies</button>
    </form>

</body>

</html>