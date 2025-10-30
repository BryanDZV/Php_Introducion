<?php


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Currículum</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h1>Formulario de Currículum</h1>

    <form action="cv.php" method="post" enctype="multipart/form-data">

        <h2>Datos personales</h2>
        <p>
            <label for="nombre">Nombre completo:</label>
            <input type="text" name="nombre" id="nombre" required />
        </p>
        <p>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" required />
        </p>
        <p>
            <label for="fecha">Fecha de nacimiento:</label>
            <input type="date" name="fecha" id="fecha" required />
        </p>
        <p>
            <label for="telefono">Teléfono:</label>
            <input type="tel" name="telefono" id="telefono" required />
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required />
        </p>




        <p>
            <input type="submit" value="Generar CV" />
        </p>
    </form>
</body>

</html>