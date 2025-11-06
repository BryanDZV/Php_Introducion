<?php
/* Configuración inicial */
require "variables.php";

if (isset($_GET["error"])) {
    $error = $_GET["error"];
}

/* Lectura de cookies */
if (isset($_COOKIE["fondo_actual"]) && isset($_COOKIE["idioma_actual"])) {
    $fondo_actual = $_COOKIE["fondo_actual"];
    $idioma_actual = $_COOKIE["idioma_actual"];
    header("Location:introducirCV.php");
    exit;
} else {
    $error = "No hay cookies guardadas. Configura tus preferencias.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traductor CV</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h1>Traductor CV</h1>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </header>

    <main>
        <section class="contenedor-global">
            <form action="procesar.php" method="post" class="form-config">
                <h2>Preferencias de Visualización</h2>

                <p>Color de fondo:</p>
                <label><input type="radio" name="fondo" value="red"> Rojo</label>
                <label><input type="radio" name="fondo" value="blue"> Azul</label>
                <label><input type="radio" name="fondo" value="gray"> Gris</label>

                <p>Selecciona idioma del CV:</p>
                <label><input type="radio" name="idioma" value="es"> Español</label>
                <label><input type="radio" name="idioma" value="en"> Inglés</label>
                <label><input type="radio" name="idioma" value="fr"> Francés</label>

                <button type="submit" class="btn-principal">Empezar CV</button>
            </form>
        </section>
    </main>
</body>

</html>