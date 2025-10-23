<?php
$img = "";
require "./funciones.php";
if (isset($_GET["img"])) {
    $img = $_GET["img"];
} else {
    echo "error";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
</head>

<body>

    <img src="<?php echo $img ?>" alt="">
    <h1>Soy un Captcha</h1>
    <form action="procesar.php" method="post">
        <input type="text" name="dato">
        <input type="submit" value="Enviar">

    </form>

</body>

</html>