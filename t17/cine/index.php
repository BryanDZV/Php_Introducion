<?php
$accion = $_GET['accion'] ?? 'listar';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cartelera</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <nav>
        <a href="index.php">🎬 Cartelera</a>
        <a href="index.php?accion=crear">➕ Nueva película</a>
    </nav>

    <?php
    switch ($accion) {
        case 'crear':
            require "vistas/crear.php";
            break;

        case 'editar':
            require "vistas/editar.php";
            break;

        default:
            require "vistas/listar.php";
    }
    ?>

</body>

</html>