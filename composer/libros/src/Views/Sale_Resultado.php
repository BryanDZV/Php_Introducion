<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <h2><?php if (!empty($mensaje)): ?>
            <p style="color:red"><?= $mensaje ?></p>
        <?php endif; ?>

    </h2>

    <a href="index.php">Volver al inicio</a>

</body>

</html>