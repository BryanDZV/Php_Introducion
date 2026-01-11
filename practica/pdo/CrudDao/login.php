<?php
require_once "Config/Database.php";
require_once "Dao/UsuarioDAO.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"] ?? "";
    $password = $_POST["password"] ?? "";

    $pdo = Database::getConexion();
    $usuarioDAO = new UsuarioDAO($pdo);

    $usuario = $usuarioDAO->findById($id);

    if ($usuario && password_verify($password, $usuario["password"])) {
        echo "Login correcto. Bienvenido " . $usuario["id"];
    } else {
        echo "id o contraseña incorrectos";
    }
}
?>

<form method="post">
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Contraseña">
    <button type="submit">Entrar</button>
</form>