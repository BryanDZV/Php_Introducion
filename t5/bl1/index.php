<?php
require './funciones.php';

$datos = [
    "pedro" => "123456789",
    "lucas" => "987456123",
];
$mensaje = "";



//aseguro si viene de post 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //valido los datos
    if (
        isset($_POST["nombre"]) && !empty($_POST["nombre"])
        && isset($_POST["pass"]) && !empty($_POST["pass"])
    ) {
        //si todo esta bien creo y asigno a variables los datos recibidos
        $usuario = trim(htmlspecialchars($_POST["nombre"]));
        $password = trim(htmlspecialchars($_POST["pass"]));
        
        $resultado=validarUser($usuario, $password);

       if ($resultado) {
        
        header("Location: verDatos.php?usuario=" . $resultado['usuario']);
        exit();
    } else {
        $mensaje = "Datos incorrectos. Serás redirigido en 10 segundos";
        header("Refresh:10; url=index.php");
        echo "<p>$mensaje</p>";
        exit();
    }





    } else {
        header("Location:" . $_SERVER["PHP_SELF"]);
        $mensaje = "Por favor, ingresa tus datos.No pueden estar vacios";
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
    <form action="<?php echo ($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="tu usuario" required>
        <label for="contraseña">
            <input type="password" name="pass" id="contraseña" required placeholder="tu contraseña" minlength="9">
        </label>
        <input type="submit" value="enviar">

    </form>

</body>

</html>