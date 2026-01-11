<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Crear cliente</title>
    <link rel="stylesheet" href="/././././composer/libros/src/Views/styleCliente.css">
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

    <form action="../../../libros/index.php?action=crearCliente" method="post">
        <input type="text" name="firstname" placeholder="Nombre"><br>
        <input type="text" name="surname" placeholder="Apellidos"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Contraseña" required min="2">

        <select name="type">
            <option value="">Seleccione tipo</option>
            <option value="basic">Basic</option>
            <option value="premium">Premium</option>
        </select><br>

        <button type="submit" name="registrar">Registrar</button>
    </form>

</body>

</html>