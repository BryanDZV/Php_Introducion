<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ventas - Libros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
        }

        .error {
            color: darkred;
        }

        .ok {
            color: darkgreen;
        }

        .field {
            margin: 8px 0;
        }
    </style>
</head>

<body>

    <header>
        <h1>Ejercicio Ventas (MVC + PDO)</h1>
        <hr>
    </header>

    <main>
        <?php
        // ESTA LÍNEA ES LA IMPORTANTE:
        // View::render pasó $templatePath como variable dentro de $data,
        // así que aquí simplemente hacemos require del archivo.
        if (isset($templatePath)) {
            require $templatePath;
        } else {
            echo "<p>No se encontró vista para mostrar.</p>";
        }
        ?>
    </main>

    <footer>
        <hr>
        <p>Hecho para práctica 2º DAW.</p>
    </footer>

</body>

</html>