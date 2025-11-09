<?php

session_start();

require "./variables.php";
require "./funciones.php";


$datos = [
    "nombre" => $_POST["nombre"] ?? "",
    "apellidos" => $_POST["apellidos"] ?? "",
    "edad" => $_POST["edad"] ?? "",
    "dni" => $_POST["dni"] ?? "",
    "email" => $_POST["email"] ?? "",
    "pais" => $_POST["pais"] ?? "",
    "estudios" => $_POST["estudios"] ?? "",
    "idiomas" => $_POST["idiomas"] ?? []
];

$_SESSION["form"] = $datos; //precargar en index si hay errores

$errores = validarRegistro($datos);

if (!empty($errores)) {
    $_SESSION["errores"] = $errores;
    header("Location: index.php");
} else {
    $_SESSION["usuario"] = $datos; //si estan bien guardo los datos del usuario
    header("Location: bienvenida.php");
}
