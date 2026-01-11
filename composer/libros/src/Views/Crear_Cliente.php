<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Crear cliente</title>
</head>

<body>

    <?php
    if (isset($error)) {
        echo "<p style='color:red'>$error</p>";
    }

    if (isset($mensaje) && $mensaje === 'cliente_creado') {
        echo "<p style='color:green'>Cliente creado correctamente</p>";
    }
    ?>

    <form method="post">
        <input type="text" name="firstname" placeholder="Nombre"><br>
        <input type="text" name="surname" placeholder="Apellidos"><br>
        <input type="email" name="email" placeholder="Email"><br>

        <select name="type">
            <option value="">Seleccione tipo</option>
            <option value="basic">Basic</option>
            <option value="premium">Premium</option>
        </select><br>

        <button type="submit" name="registrar">Registrar</button>
    </form>

</body>

</html>