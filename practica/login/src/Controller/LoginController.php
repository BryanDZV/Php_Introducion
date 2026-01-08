<?php
session_start();
//__DIR__ = la carpeta del archivo actual


if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
    //Si en el futuro mandas más campos en el formulario, también se guardarán en la sesión.
    $_SESSION["datos"] = $_POST;
    ///si solo quieres usuario y password, entonces es mejor esta
    // $_SESSION["datos"] = [
    //     "usuario" => $_POST["usuario"],
    //     "password" => $_POST["password"]
    // ];
    header("Location: ./../../../src/Model/User.php");
} else {
    $error = "rellena todos los campos";
    header("Location:./../../../public/login.php");
}
