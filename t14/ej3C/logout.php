<?php
session_start();

/*
    ENTRADA:
    Se llega aquí cuando el usuario hace clic en "Reiniciar".

    OBJETIVO:
    - Borrar la sesión completa
    - Dejar al usuario como si entrara de nuevo por primera vez
    - Redirigir a index.php
*/

// Borrar variables de sesión
$_SESSION = [];

// Borrar cookie de sesión (si existe)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 3600,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Destruir la sesión en el servidor
session_destroy();

// Redirigir al inicio
header("Location: index.php");

// NO exit
// NO return
// El archivo termina aquí de forma natural, como pide tu profesor.
