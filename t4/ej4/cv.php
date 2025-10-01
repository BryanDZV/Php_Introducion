<?php
$nombre = $direccion = $fecha = $telefono = $email = $sexo = $formacion = $experiencia = null;
$idiomas =  [];
$aficiones = [];
$nuevoNombreImagen = "";

if (
    !empty($_POST["nombre"]) &&
    !empty($_POST["direccion"]) &&
    !empty($_POST["fecha"]) &&
    !empty($_POST["telefono"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["sexo"]) &&
    !empty($_POST["formacion"]) &&
    !empty($_POST["experiencia"]) &&
    !empty($_POST["aficiones"])
) {

    $nombre      = trim($_POST["nombre"]);
    $direccion   = trim($_POST["direccion"]);
    $fecha       = trim(htmlspecialchars($_POST["fecha"]));
    $telefono    = trim($_POST["telefono"]);
    $email       = trim($_POST["email"]);
    $sexo        = trim($_POST["sexo"]);
    $formacion   = trim($_POST["formacion"]);
    $experiencia = trim($_POST["experiencia"]);
    $idiomas     = isset($_POST["idioma"]) ? $_POST["idioma"] : [];
    $aficiones   = $_POST["aficiones"];
    $nombreImagen = $_FILES["foto"]["name"];
    $nombreTmpImagen = $_FILES['foto']['tmp_name'];

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {

        $carpeta = "./imagenSubida/";
        if (!is_dir($carpeta)) {
            mkdir($carpeta);
        }
        $nuevoNombreImagen = date("d-m-Y") . "_"  . $nombreImagen;
        $destino = $carpeta . $nuevoNombreImagen;

        if (move_uploaded_file($nombreTmpImagen, $destino)) {

?>
            <!DOCTYPE html>
            <html lang="es">

            <head>
                <meta charset="UTF-8">
                <title>CV Generado</title>
                <link rel="stylesheet" href="estilos.css">
            </head>

            <body>
                <div class="cv">
                    <img src="<?php echo $destino ?>" alt="Foto de cv">

                    <h1><?php echo htmlspecialchars($nombre); ?></h1>

                    <h2>Datos personales</h2>
                    <p><strong>Dirección:</strong> <?php echo htmlspecialchars($direccion); ?></p>
                    <p><strong>Fecha de nacimiento:</strong> <?php echo htmlspecialchars($fecha); ?></p>
                    <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                    <p><strong>Sexo:</strong> <?php echo htmlspecialchars($sexo); ?></p>

                    <h2>Formación académica</h2>
                    <p><?php echo (htmlspecialchars($formacion)); ?></p>

                    <h2>Experiencia laboral</h2>
                    <p><?php echo (htmlspecialchars($experiencia)); ?></p>

                    <h2>Idiomas</h2>
                    <p>
                        <?php
                        if (!empty($idiomas)) {
                            foreach ($idiomas as $a) {
                                echo $a . " ";
                            }
                        } else {
                            echo "Ninguna";
                        }
                        ?>
                    </p>

                    <h2>Aficiones</h2>
                    <p>
                        <?php
                        if (!empty($aficiones)) {
                            foreach ($aficiones as $a) {
                                echo $a . " ";
                            }
                        } else {
                            echo "Ninguna";
                        }
                        ?>
                    </p>


                </div>
            </body>

            </html>
<?php
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo " No se subió ninguna imagen o hubo un error.";
    }
} else {
    echo " Faltan datos obligatorios en el formulario.";
}
?>