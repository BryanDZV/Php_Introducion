<?php

if (!empty($_GET["error"])) {
    $error = $_GET["error"];
} else {
    $error = "";
}
?>
<?php

include __DIR__ . "/header.php" ?>

<div class="container mt-4">
    <h2>Login</h2>
    <div class="mb3">
        <?php echo $error ? $error : ""; ?>

        <!-- otra forma ternariua-->
        <?= $error ? $error : "" ?>
    </div>
    <?php ?>

    <form action="./../src/Controller/LoginController.php" method="post">


        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" id="usuario" name="usuario"
                class="form-control"
                placeholder="Introduce tu usuario"
                required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password"
                class="form-control"
                placeholder="Introduce tu contraseña"
                required minlength="7">
        </div>

        <button class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php include __DIR__ . "/footer.php"; ?>