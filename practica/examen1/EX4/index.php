<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <div>
        <h1><?php
            if (isset($_GET["parametro"])) {
                echo htmlspecialchars($parametro = $_GET["parametro"]);
            } ?></h1>
        <p>
            <?php if (isset($_COOKIE["idioma"])) {
                echo htmlspecialchars($idioma = $_COOKIE["idioma"]);
            }
            ?>
        </p>
    </div>
    <form action="./procesar.php" method="post">
        <h2>elige un idioma :</h2>
        <select name="idioma" id="">
            <option value="">Seleccion una opcion</option>
            <option value="es">Español</option>
            <option value="en">Ingles</option>
            <option value="fr">Frances</option>
        </select>
        <input type="submit" value="enviar">
        <a href="./procesar.php?borrarCookie">Borrar Cookie</a>
    </form>


</body>

</html>