<?php
/*1. Realizar una función para que nos pinte tablas.Lo único obligatorio a pasar a la función es el numero de filas y columnas , pero opcionalmente le podemos pasar ancho, alto, color de fondo, bordes, etc

crear_tabla(4,6,'width: 60px;','height: 40px;','background: pink;','border: 3px dashed blue;');*/
$tabla = "";
if (isset($_GET["tabla"])) {
    $tabla = urldecode($_GET["tabla"]); //  decodifica el HTML recibido
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <main>
        <section class="form-content">
            <h1>Tabla</h1>

            <form action="procesar.php" method="post">
                <p>Número de columnas:</p>
                <input type="text" name="columna" required>

                <p>Número de filas:</p>
                <input type="text" name="filas" required>

                <h2>Opcionales:</h2>
                <p>Ancho (ej: 60px o auto):</p>
                <input type="text" name="ancho">

                <p>Color (ej: pink o #ff0000):</p>
                <input type="text" name="color">

                <p>Borde (ej: 3px solid blue):</p>
                <input type="text" name="borde">

                <input type="submit" value="Enviar">
            </form>
        </section>

        <section class="tabla-content">
            <?php
            if (!empty($tabla)) {
                echo $tabla;
            }
            ?>
        </section>
    </main>
</body>

</html>