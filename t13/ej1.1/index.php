<?php
require "./variables.php";
require "./funciones.php";

$idiomas = json_decode(file_get_contents("./datos/idiomas.json"), true);
$estudios = json_decode(file_get_contents("./datos/estudios.json"), true);
$paises = json_decode(file_get_contents("./datos/paises.json"), true);



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="./estilos.css">
</head>

<body>
    <h1>Registro de Usuario</h1>
    <form action="procesar_registro.php" method="post">
        <p>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="<?= $_SESSION['form']['nombre'] ?? '' ?>">
            <span class="error"><?= $_SESSION['errores']['nombre'] ?? '' ?></span>
        </p>

        <p>
            <label>Apellidos:</label><br>
            <input type="text" name="apellidos" value="<?= $_SESSION['form']['apellidos'] ?? '' ?>">
        </p>

        <p>
            <label>Edad:</label><br>
            <input type="number" name="edad" value="<?= $_SESSION['form']['edad'] ?? '' ?>">
            <span class="error"><?= $_SESSION['errores']['edad'] ?? '' ?></span>
        </p>

        <p>
            <label>DNI:</label><br>
            <input type="text" name="dni" value="<?= $_SESSION['form']['dni'] ?? '' ?>">
            <span class="error"><?= $_SESSION['errores']['dni'] ?? '' ?></span>
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?= $_SESSION['form']['email'] ?? '' ?>">
            <span class="error"><?= $_SESSION['errores']['email'] ?? '' ?></span>
        </p>

        <p>
            <label>País:</label><br>
            <select name="pais">
                <?php foreach ($paises as $pais): ?>
                    <option value="<?= $pais ?>"
                        <?= (($_SESSION['form']['pais'] ?? '') === $pais) ? 'selected' : '' ?>>
                        <?= $pais ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <span class="error"><?= $_SESSION['errores']['pais'] ?? '' ?></span>
        </p>

        <p>
            <label>Estudios:</label><br>
            <select name="estudios">
                <?php foreach ($estudios as $est): ?>
                    <option value="<?= $est ?>"
                        <?= (($_SESSION['form']['estudios'] ?? '') === $est) ? 'selected' : '' ?>>
                        <?= $est ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>

        <p>
            <label>Idiomas:</label><br>
            <?php foreach ($idiomas as $idioma): ?>
                <input type="checkbox" name="idiomas[]" value="<?= $idioma ?>"
                    <?= (in_array($idioma, $_SESSION['form']['idiomas'] ?? [])) ? 'checked' : '' ?>>
                <?= $idioma ?>
            <?php endforeach; ?>
        </p>

        <p><input type="submit" value="Registrarse"></p>
    </form>
</body>

</html>

<?php
unset($_SESSION['errores']);
?>