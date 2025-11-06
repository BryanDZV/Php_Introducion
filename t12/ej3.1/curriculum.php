<?php
require "./funciones.php";
require "./variables.php";

/* Lectura de cookies */
if (isset($_COOKIE["fondo_actual"]) && isset($_COOKIE["idioma_actual"])) {
    $fondo_actual = $_COOKIE["fondo_actual"];
    $idioma_actual = $_COOKIE["idioma_actual"];
    $traduccionActual = obtenerDatos($idioma_actual);
} else {
    $idioma_actual = "es";
    $traduccionActual = obtenerDatos("es");
}
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma_actual; ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $traduccionActual["titulo"]; ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body style="background-color:<?php echo $fondo_actual; ?>">

    <h1><?php echo $traduccionActual["titulo"]; ?></h1>

    <form action="cv.php" method="post" enctype="multipart/form-data">

        <h2><?php echo $traduccionActual["datos"]; ?></h2>
        <p>
            <label for="nombre"><?php echo $traduccionActual["nombre"]; ?></label>
            <input type="text" name="nombre" id="nombre" required />
        </p>
        <p>
            <label for="direccion"><?php echo $traduccionActual["direccion"]; ?></label>
            <input type="text" name="direccion" id="direccion" required />
        </p>
        <p>
            <label for="fecha"><?php echo $traduccionActual["fecha"]; ?></label>
            <input type="date" name="fecha" id="fecha" required />
        </p>
        <p>
            <label for="telefono"><?php echo $traduccionActual["telefono"]; ?></label>
            <input type="tel" name="telefono" id="telefono" required />
        </p>
        <p>
            <label for="email"><?php echo $traduccionActual["email"]; ?></label>
            <input type="email" name="email" id="email" required />
        </p>
        <p>
            <label for="foto"><?php echo $traduccionActual["foto"]; ?></label>
            <input type="file" name="foto" id="foto" required />
        </p>

        <h2><?php echo $traduccionActual["formacion_titulo"]; ?></h2>
        <p>
            <label for="formacion"><?php echo $traduccionActual["formacion_texto"]; ?></label><br>
            <textarea name="formacion" id="formacion" rows="4" cols="40" required></textarea>
        </p>

        <h2><?php echo $traduccionActual["experiencia_titulo"]; ?></h2>
        <p>
            <label for="experiencia"><?php echo $traduccionActual["experiencia_texto"]; ?></label><br>
            <textarea name="experiencia" id="experiencia" rows="4" cols="40" required></textarea>
        </p>

        <h2><?php echo $traduccionActual["idiomas_titulo"]; ?></h2>
        <p>
            <input type="checkbox" name="idioma[]" value="<?php echo $traduccionActual["idioma_ingles"]; ?>" id="i1">
            <label for="i1"><?php echo $traduccionActual["idioma_ingles"]; ?></label>
            <input type="checkbox" name="idioma[]" value="<?php echo $traduccionActual["idioma_frances"]; ?>" id="i2">
            <label for="i2"><?php echo $traduccionActual["idioma_frances"]; ?></label>
            <input type="checkbox" name="idioma[]" value="<?php echo $traduccionActual["idioma_aleman"]; ?>" id="i3">
            <label for="i3"><?php echo $traduccionActual["idioma_aleman"]; ?></label>
        </p>

        <h2><?php echo $traduccionActual["sexo_titulo"]; ?></h2>
        <p>
            <input type="radio" name="sexo" id="fem" value="<?php echo $traduccionActual["sexo_femenino"]; ?>" required>
            <label for="fem"><?php echo $traduccionActual["sexo_femenino"]; ?></label>
            <input type="radio" name="sexo" id="masc" value="<?php echo $traduccionActual["sexo_masculino"]; ?>" required>
            <label for="masc"><?php echo $traduccionActual["sexo_masculino"]; ?></label>
        </p>

        <h2><?php echo $traduccionActual["aficiones_titulo"]; ?></h2>
        <p>
            <label for="6"><?php echo $traduccionActual["aficiones_texto"]; ?></label><br>
            <select multiple name="aficiones[]" id="6" required size="5">
                <option value="<?php echo $traduccionActual["aficiones_op1"]; ?>"><?php echo $traduccionActual["aficiones_op1"]; ?></option>
                <option value="<?php echo $traduccionActual["aficiones_op2"]; ?>"><?php echo $traduccionActual["aficiones_op2"]; ?></option>
                <option value="<?php echo $traduccionActual["aficiones_op3"]; ?>"><?php echo $traduccionActual["aficiones_op3"]; ?></option>
            </select>
        </p>

        <p>
            <input type="submit" value="<?php echo $traduccionActual["boton"]; ?>" />
        </p>
    </form>

    <form action="procesar.php" method="post">
        <button type="submit" name="borrar_cookies" value="1">Borrar Cookies</button>
    </form>

</body>

</html>