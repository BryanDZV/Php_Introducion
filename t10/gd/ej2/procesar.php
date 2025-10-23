<?php
require "./funciones.php";
$fondo = "./img/fondo.jpeg";
if (isset($_POST["dato"])) {
    $dato = $_POST["dato"];
    $img = generar_captcha($fondo, $dato);

    header("Location:index.php?=img=$img");
} else {
    $error = "error en procesar.php";
    header("Location:index.php");
}
