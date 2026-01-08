<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <?php if ($resultado): ?>
        <p>✅ Correo capturado correctamente en Mailtrap</p>
    <?php else: ?>
        <p>❌ Error al enviar el correo</p>
    <?php endif; ?>

    <a href="/mailTrap/contactoMVC/index.php">Volver</a>

</body>

</html>