<?php
// 1. Iniciar la sesión (OBLIGATORIO para poder modificarla)
session_start();

// 2. Vaciar el array $_SESSION
// Borra todas las variables (ej: $_SESSION['usuario']) EN EL MOMENTO.
$_SESSION = array();

// 3. Borrar la cookie de sesión del navegador
// Esta es la parte CLAVE que le faltaba a tu código.
// Le dice al navegador que la cookie "caducó" y que la borre.
if (ini_get("session.use_cookies")) {
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
}

// 4. Destruir la sesión en el servidor
// Esto es lo que tú ya tenías. Borra el archivo en el servidor.
session_destroy();

// 5. Redirigir al usuario
// (Asegúrate de que 'index.php' es donde quieres que vaya)
//header("Location: index.php");

// 6. Añadir 'exit'
// Es una buena práctica para asegurar que el script se detiene
// inmediatamente después de la redirección.
exit;
