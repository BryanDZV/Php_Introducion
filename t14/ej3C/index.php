<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Figuras - Paso 1</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">

        <h1>Figuras geométricas</h1>

        <?php if (!empty($_GET["error"])): ?>
            <p class="error"><?= htmlspecialchars($_GET["error"]) ?></p>
        <?php endif; ?>

        <h2>Elige tu figura:</h2>
        <form action="controller.php" method="post">
            <label><input type="radio" name="eleccion" value="cuadrado"> Cuadrado</label>
            <label><input type="radio" name="eleccion" value="circulo"> Círculo</label>
            <label><input type="radio" name="eleccion" value="triangulo"> Triángulo</label>
            <label><input type="radio" name="eleccion" value="rectangulo"> Rectángulo</label>

            <button type="submit" class="button">Siguiente</button>
        </form>
    </div>
</body>

</html>