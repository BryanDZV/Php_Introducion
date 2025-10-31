<?php
require "./funciones.php";
require "./variables.php";
//lectura de coockie
if ($_COOKIE["fondo_actual"] && $_COOKIE["idioma_actual"]) {
    $fondo_actual = $_COOKIE["fondo_actual"];
    $idioma_actual = $_COOKIE["idioma_actual"];

    $traduccionActual = obtenerDatos($idioma_actual);
} else {
    $idioma_actual = "es";
    $traduccionActual = obtenerDatos($traduccionActual);
    echo "no hay cokkies";
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Currículum</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <p><?php if (!empty($idioma_actual)) {
            echo "<em>" . $idioma_actual . "</em>";
        } ?></p>
    <h1><?php if (!empty($traduccionActual)) {
            echo  $traduccionActual["titulo"];
        } ?></h1>


    <form action="cv.php" method="post" enctype="multipart/form-data">

        <h2><?php if (!empty($traduccionActual)) {
                echo  $traduccionActual["datos"];
            } ?></h2>
        <p>
            <label for="nombre"><?php if (!empty($traduccionActual)) {
                                    echo  $traduccionActual["nombre"];
                                } ?></label>
            <input type="text" name="nombre" id="nombre" required />
        </p>
        <p>
            <label for="direccion"><?php if (!empty($traduccionActual)) {
                                        echo  $traduccionActual["direccion"];
                                    } ?></label>
            <input type="text" name="direccion" id="direccion" required />
        </p>
        <p>
            <label for="fecha"><?php if (!empty($traduccionActual)) {
                                    echo  $traduccionActual["fecha"];
                                } ?></label>
            <input type="date" name="fecha" id="fecha" required />
        </p>
        <p>
            <label for="telefono"><?php if (!empty($traduccionActual)) {
                                        echo  $traduccionActual["telefono"];
                                    } ?></label>
            <input type="tel" name="telefono" id="telefono" required />
        </p>
        <p>
            <label for="email"><?php if (!empty($traduccionActual)) {
                                    echo  $traduccionActual["email"];
                                } ?></label>
            <input type="email" name="email" id="email" required />
        </p>




        <p>
            <input type="submit" value="Generar CV" />
        </p>
    </form>
</body>

</html>