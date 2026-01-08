<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>

<body>

    <h2>Formulario de contacto</h2>

    <form action="../index.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Mensaje:</label><br>
        <textarea name="mensaje" required></textarea><br><br>

        <input type="submit" name="enviar" value="Enviar mensaje">
    </form>

</body>

</html>