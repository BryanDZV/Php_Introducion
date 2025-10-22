<?php
/*<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUA..." alt="Una imagen de ejemplo">*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Soy un Captcha</h1>
    <img src="procesar.php" alt="imagen">
    <form action="procesar.php" method="post">
        <input type="text" name="dato">
        <input type="submit" value="Enviar">

    </form>

</body>

</html>