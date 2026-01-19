<?php
$xml = simplexml_load_file("./CINESLYS_BASEDEDATOS.txt");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cartelera de Cine</title>
</head>

<body>

    <h1>🎬 Cartelera de Cine</h1>

    <?php foreach ($xml->pelicula as $pelicula): ?>
        <div style="border:1px solid black; margin:10px; padding:10px">
            <h2><?php echo $pelicula->titulo; ?></h2>
            <p>Duración: <?php echo $pelicula->duracion; ?> minutos</p>

            <strong>Sesiones:</strong>
            <ul>
                <?php foreach ($pelicula->sesiones->sesion as $sesion): ?>
                    <li><?php echo $sesion; ?></li>
                <?php endforeach; ?>
            </ul>

            <!-- Acciones de administrador -->
            <a href="eliminar.php?id=<?php echo $pelicula['id']; ?>"> Eliminar</a>
        </div>
    <?php endforeach; ?>

    <hr>
    <a href="insertar.php"> Añadir película</a>

</body>

</html>