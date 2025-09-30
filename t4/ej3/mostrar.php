<?php
if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && isset($_FILES["foto"])&& $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $nombre = trim($_POST["nombre"]);
    $apellidos = trim($_POST["apellidos"]);
    $fecha = date("d-m-Y");
    $nombreImagen=$_FILES["foto"]["name"];
    $nombreTmpImagen=$_FILES["foto"]["tmp_name"];

  
    $rutaDir = "./imagenSubida/";
    if (!is_dir($rutaDir)) {
        mkdir($rutaDir);
    }

    $nuevoNombreImagen =date("d-m-Y") . $nombre . "_" . $apellidos;
    $destino=$rutaDir.$nuevoNombreImagen;
    if (move_uploaded_file($nombreTmpImagen,$destino)) {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <title>Resultado</title>
        </head>
        <body>
          <h1>Datos de la persona</h1>
          <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
          <p><strong>Apellidos:</strong> <?php echo htmlspecialchars($apellidos); ?></p>
          <p><strong>Fecha actual:</strong> <?php echo $fecha; ?></p>
          <p><img src="<?php echo $destino ?>" alt="Foto de la persona" width="200"></p>
        </body>
        </html>
        <?php
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "Faltan datos.";
}
