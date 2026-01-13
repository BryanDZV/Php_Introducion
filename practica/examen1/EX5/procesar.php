<?php
$userDefinido = "admin";
$passDefinida = 1234;
$parametro = "";
session_start();

if (!isset($_POST["nombre"]) || !isset($_POST["pass"])) {
    $parametro = urlencode("falta algun dato");
} else {
    $pass = trim(strip_tags($_POST["pass"]));
    $user = trim(strip_tags($_POST["nombre"]));
    if (!is_numeric($pass)) {
        $parametro = urlencode("contraseña incorrecta");
    } else {
        if ($pass != $passDefinida || $user != $userDefinido) {
            $parametro = urlencode("Acceso incorrecto");
        } else {
            $_SESSION["user"] = $user;
            $mensaje = "Bienvenido";
            header("Location:./perfil.php?mensaje=" . $mensaje);
        }
    }
}
if ($parametro != "") {
    header("Location:./index.php?parametro=" . $parametro);
}
