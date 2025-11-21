<?php
session_start();

// 1️⃣ Borrar todas las variables de sesión
$_SESSION = [];

// 2️⃣ Si existe la cookie de sesión, eliminarla
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

// 3️⃣ Destruir la sesión completamente
session_destroy();

// 4️⃣ Redirigir al inicio
header("Location: index.php");
return;
