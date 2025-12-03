<?php
if (!empty($_GET["error"])) {
    $error = $_GET["error"];
} else {
    $error = "";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Conectar a MySQL</title>
</head>

<body>

    <h1>Datos de conexión</h1>

    <h2><?php echo $error ?></h2>

    <form action="../controller/controller.php" method="post">

        <label>Host:</label>
        <input type="text" name="host" required><br><br>

        <label>Usuario:</label>
        <input type="text" name="user" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="pass"><br><br>

        <label>Base de datos:</label>
        <input type="text" name="dataBase" required><br><br>

        <input type="submit" value="Conectar">

    </form>

</body>

</html>