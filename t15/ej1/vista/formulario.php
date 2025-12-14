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
        <input type="text" name="host" required placeholder="Coloca Localhost"><br><br>

        <label>Usuario:</label>
        <input type="text" name="user" required placeholder="Coloca root"><br><br>

        <label>Contraseña:</label>
        <input type="password" name="pass" placeholder="Contraseña vacia"><br><br>

        <label>Base de datos:</label>
        <input type="text" name="dataBase" required placeholder="Coloca Libros"><br><br>

        <input type="submit" value="Conectar">

    </form>

</body>

</html>