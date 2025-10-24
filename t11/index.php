<?php
/*1. Realizar una función para que nos pinte tablas.Lo único obligatorio a pasar a la función es el numero de filas y columnas , pero opcionalmente le podemos pasar ancho, alto, color de fondo, bordes, etc

crear_tabla(4,6,'width: 60px;','height: 40px;','background: pink;','border: 3px dashed blue;');*/
$tabla = "";
if (isset($_GET["tabla"])) {
    $tabla = $_GET["tabla"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>

<body>
    <main>
        <h1>Tabala</h1>

        <form action="procesar.php" method="post">
            <p>numero de columnas:</p>
            <input type="text" name="columna" id="c" required>
            <p>numero de filas:</p>
            <input type="text" name="filas" id="f" required>

            <input type="submit" value="Enviar">

        </form>
        <div>
            <?php
            if (!empty($tabla)) {
                echo $tabla;
            };

            ?>
        </div>


    </main>

</body>

</html>