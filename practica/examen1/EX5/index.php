<!--EJERCICIO 5 — SESIÓN + LOGIN SIMPLE

Simular un login con:

Usuario fijo: admin

Contraseña fija: 1234

Al enviar el formulario:

Si las credenciales son correctas, guardar el usuario en sesión.

Si no, mostrar mensaje de error.

Crear una página protegida que solo pueda verse si hay sesión iniciada.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <div>

        <?php
        if (isset($_GET["parametro"])) {
            echo htmlspecialchars($_GET["parametro"]);
        }

        ?>
    </div>
    <form action="./procesar.php" method="post">
        <input type="text" name="nombre" id="" placeholder="Nombre" required>
        <input type="password" name="pass" id="" min="4" required>
        <input type="submit" value="Enviar">


    </form>

</body>

</html>