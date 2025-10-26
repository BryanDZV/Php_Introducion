<?php
require_once 'funciones.php';
// Este código se ejecuta SIEMPRE que se incluya o acceda a procesar.php
$captcha_code = ''; // Variable para almacenar el código secreto generado
$captcha_base64 = generar_captcha_base64($fondo_filename, $captcha_code);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $captcha_introducido = trim($_POST['captcha_input']);
    $captcha_oculto = trim($_POST['captcha_hidden']);

    if (strtolower($captcha_introducido) === strtolower($captcha_oculto)) {
        header('Location: noerror.php');
        exit;
    } else {
        header('Location: error.php');
        exit;
    }
}
