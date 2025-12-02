<?php
session_start();


$_SESSION = [];


session_destroy();

$params = session_get_cookie_params();
setcookie(
    session_name(),
    '',
    time() - 42000,
    $params["path"],
    $params["domain"],
    $params["secure"],
    $params["httponly"]
);


// 4. Redirigir al formulario
header("Location:vista/formulario.php");
