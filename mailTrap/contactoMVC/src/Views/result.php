<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <?php if ($resultado): ?>
        <p> Mensaje enviado correctamente</p>
    <?php else: ?>
        <p> Error al enviar el mensaje</p>
    <?php endif; ?>

    <a href="view/form.php">Volver</a>

</body>

</html>