<?php

$datos=[
    "pedro"=> "123456789",
    "lucas"=> "987456123",
];
$mensaje="";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && !empty($_POST["nombre"])
        && isset($_POST["pass"])&&!empty($_POST["pass"])) {

        $usuario = trim(htmlspecialchars($_POST["nombre"]));
        $contraseña=trim(htmlspecialchars($_POST["pass"]));
        header("Location:"."./verDatos.php");
       
    } else {
        header("Location: " . $_SERVER["PHP_SELF"]);
        $mensaje = "Por favor, ingresa tus datos.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Redirección de Formulario</title>
</head>
<body>

    <h1>Formulario de Ejemplo</h1>

    <?php
    if (!empty($mensaje)) {
        echo "<p>" . $mensaje . "</p>";
    }
    ?>
    <h1>Acreditate</h1>
    <form action="<?php echo ($_SERVER['PHP_SELF'])?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"  placeholder="tu usuario" required>
        <label for="contraseña">
            <input type="password" name="pass" id="contraseña" required placeholder="tu contraseña" minlength="9">
        </label>
        <input type="submit" value="enviar">
       
    </form>

</body>
</html>