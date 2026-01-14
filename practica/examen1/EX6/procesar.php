<?php
session_start();
$parametro = "";
if (!isset($_POST["seleccion"])) {
    $parametro = urlencode("tienes que elegir uno");
} else {
    $_SESSION["carrito"] = $_POST["seleccion"];
    $mensaje = urlencode("tu carrito es");
    header("Location:./perfil.php?mensaje=" . $mensaje);
}
if ($parametro != "") {
    header("Location:./index.php?parametro=" . $parametro);
}
