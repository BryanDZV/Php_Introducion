<?php
require "./funciones.php";

if (!isset($_COOKIE["idioma_actual"])) {
    header("Location: index.php");
}

$idioma = $_COOKIE["idioma_actual"];
$traduccion = obtenerDatos($idioma);

if (!isset($_POST["nombre"])) {
    header("Location: introducirCV.php");
}

$nombre = htmlspecialchars($_POST["nombre"]);
$direccion = htmlspecialchars($_POST["direccion"]);
$fecha = htmlspecialchars($_POST["fecha"]);
$telefono = htmlspecialchars($_POST["telefono"]);
$email = htmlspecialchars($_POST["email"]);
$formacion = nl2br(htmlspecialchars($_POST["formacion"]));
$experiencia = nl2br(htmlspecialchars($_POST["experiencia"]));
$sexo = htmlspecialchars($_POST["sexo"]);
$idiomas = isset($_POST["idioma"]) ? implode(", ", $_POST["idioma"]) : "Ninguno";
$aficiones = isset($_POST["aficiones"]) ? implode(", ", $_POST["aficiones"]) : "Ninguna";

$foto = "";
if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === 0) {
    $nombreFoto = basename($_FILES["foto"]["name"]);
    $rutaDestino = "uploads/" . $nombreFoto;
    if (!is_dir("uploads")) mkdir("uploads");
    move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaDestino);
    $foto = $rutaDestino;
}
?>
<!DOCTYPE html>
<html lang="<?= $idioma ?>">

<head>
    <meta charset="UTF-8">
    <title><?= $traduccion["titulo"] ?> - <?= $nombre ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body class="cv">
    <div class="contenedor cv-card">
        <h1><?= $traduccion["titulo"] ?> - <?= $nombre ?></h1>
        <?php if ($foto): ?><img src="<?= $foto ?>" alt="Foto de <?= $nombre ?>" class="foto-cv"><?php endif; ?>

        <h2><?= $traduccion["datos"] ?></h2>
        <p><strong><?= $traduccion["direccion"] ?>:</strong> <?= $direccion ?></p>
        <p><strong><?= $traduccion["fecha"] ?>:</strong> <?= $fecha ?></p>
        <p><strong><?= $traduccion["telefono"] ?>:</strong> <?= $telefono ?></p>
        <p><strong><?= $traduccion["email"] ?>:</strong> <?= $email ?></p>
        <p><strong>Sexo:</strong> <?= $sexo ?></p>

        <h2>Formación académica</h2>
        <p><?= $formacion ?></p>

        <h2>Experiencia laboral</h2>
        <p><?= $experiencia ?></p>

        <h2>Idiomas</h2>
        <p><?= $idiomas ?></p>

        <h2>Aficiones</h2>
        <p><?= $aficiones ?></p>

        <a href="curriculum.php" class="boton">Volver</a>
    </div>
</body>

</html>