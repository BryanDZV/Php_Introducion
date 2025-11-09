<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
}

$datos = $_SESSION["usuario"];

$nombre_saludo = $datos["nombre"] ?? "Usuario";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="./estilos.css">
</head>

<body>
    <h1>Bienvenido, <?= htmlspecialchars($nombre_saludo) ?> </h1>

    <h2>Datos de Registro</h2>

    <div class="datos-usuario">

        <?php foreach ($datos as $clave => $valor) { ?>

            <?php

            if (!is_array($valor)) {
            ?>
                <h3><?= (ucfirst($clave)) ?>:</h3>
                <p><?= ($valor) ?></p>
            <?php } ?>

        <?php } ?>

        <?php if (!empty($datos["idiomas"])) { ?>

            <h3>Idiomas Seleccionados:</h3>
            <ul>
                <?php foreach ($datos["idiomas"] as $idioma) { ?>
                    <li><?= ($idioma) ?></li>
                <?php } ?>
            </ul>
        <?php } ?>

    </div>

    <form action="logout.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>
</body>

</html>