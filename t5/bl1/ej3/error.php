<?php



require 'funciones.php';

if (isset($_GET['usuario'])) {
    $usuario = htmlspecialchars($_GET['usuario']);
    echo "<h1>Error en los datos</h1>"; ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Error de login</title>
    </head>

    <body>
        <h1>Error: usuario o contraseña incorrectos</h1>
        <p>Opciones:</p>
        <ul>
            <li><a href="index.php">Volver a loguearse</a></li>
            <li><a href="registro.php">Registrarse</a></li>
        </ul>
    </body>

    </html>
<?php
};
?>