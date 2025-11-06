<?php
require "./funciones.php";
require "./variables.php";

// Seguridad: sólo acceder si vienen cookies 
if (!isset($_COOKIE["fondo_actual"]) || !isset($_COOKIE["idioma_actual"])) {
    header("Location:index.php?error=Acceso no autorizado");
    exit;
}


$fondo_actual = $_COOKIE["fondo_actual"];
$idioma_actual = $_COOKIE["idioma_actual"];
$traduccionActual = obtenerTraduccion($idioma_actual);

// Recoger y sanitizar inputs
$nombre = trim($_POST["nombre"] ?? "");
$direccion = trim($_POST["direccion"] ?? "");
$telefono = trim($_POST["telefono"] ?? "");
$email = trim($_POST["email"] ?? "");
$formacion = trim($_POST["formacion"] ?? "");
$experiencia = trim($_POST["experiencia"] ?? "");
$idiomas_extra = $_POST["idioma_extra"] ?? [];
$sexo = trim($_POST["sexo"] ?? "");
$aficiones = $_POST["aficiones"] ?? [];

// Manejo de la foto subida (si existe)
$fotoPath = "";
if (!empty($_FILES["foto"]["tmp_name"]) && $_FILES["foto"]["error"] === 0) {
    $tmp = $_FILES["foto"]["tmp_name"];
    $name = basename($_FILES["foto"]["name"]);
    $name = preg_replace('/[^A-Za-z0-9\-\_\.]/', '_', $name);
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $allowed = ["jpg", "jpeg", "png", "gif", "webp"];
    if (in_array($ext, $allowed)) {
        if (!is_dir("uploads")) mkdir("uploads", 0755, true);
        $nuevoNombre = time() . "_" . $name;
        $dest = "uploads/" . $nuevoNombre;
        if (move_uploaded_file($tmp, $dest)) $fotoPath = $dest;
    }
}

// Definir secciones dinámicas del CV
$secciones = [
    "formacion" => $formacion,
    "experiencia" => $experiencia,
    "idiomas" => !empty($idiomas_extra) ? implode(", ", $idiomas_extra) : "—",
    "sexo" => $sexo,
    "aficiones" => !empty($aficiones) ? implode(", ", $aficiones) : "—"
];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($idioma_actual) ?>">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($traduccionActual["titulo"]) . " - " . htmlspecialchars($nombre) ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="background-color:<?= htmlspecialchars($fondo_actual) ?>;">

    <div class="cv-container">
        <div class="cv-top">
            <?php if (!empty($fotoPath)): ?>
                <img src="<?= htmlspecialchars($fotoPath) ?>" alt="Foto de <?= htmlspecialchars($nombre) ?>" class="cv-photo">
            <?php endif; ?>
            <div>
                <h1 class="cv-name"><?= htmlspecialchars($nombre) ?></h1>
                <p><?= htmlspecialchars($traduccionActual["direccion"]) ?> <?= htmlspecialchars($direccion) ?></p>
                <p><?= htmlspecialchars($traduccionActual["telefono"]) ?> <?= htmlspecialchars($telefono) ?></p>
                <p><?= htmlspecialchars($traduccionActual["email"]) ?> <?= htmlspecialchars($email) ?></p>
            </div>
        </div>

        <!-- Mostrar dinámicamente todas las secciones -->
        <?php foreach ($secciones as $clave => $valor): ?>
            <div class="cv-section">
                <h2><?= htmlspecialchars($traduccionActual[$clave]) ?></h2>
                <p><?= nl2br(htmlspecialchars($valor)) ?></p>
            </div>
        <?php endforeach; ?>

        <p style="text-align:center; margin-top:18px;">
            <a href="introducirCV.php" class="btn-volver">Volver</a>
        </p>
    </div>

</body>

</html>