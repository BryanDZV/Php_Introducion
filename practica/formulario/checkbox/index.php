<?php
// require "./variables.php"; // Si no la necesitas, puedes quitarla.
if (isset($_GET["error"])) {
    $error = $_GET["error"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Checkbox</title>
</head>

<body>

    <h1>ternario: <?= !empty($error) ? htmlspecialchars($error) : '' ?></h1>

    <form action="procesar.php" method="post">
        <label for="gato_check">
            <input type="checkbox" name="check[]" id="gato_check" value="gato">Gato
            <input type="checkbox" name="check[]" id="gato_check" value="perro">Perro
            <input type="checkbox" name="check[]" id="gato_check" value="conejo">Conejo
            <input type="checkbox" name="check[]" id="gato_check" value="pajaro">Pajaro

        </label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>