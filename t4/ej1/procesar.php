<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $nombre = $_FILES['archivo']['name'];
        $nombreTemporal = $_FILES['archivo']['tmp_name'];

        $rutaDir = "./imagenesSubidas/";

        if (!is_dir($rutaDir)) {
            mkdir($rutaDir);
        }

        $nuevoNombre = date("d-m-Y") . "_" . $nombre;

        $destino = $rutaDir . $nuevoNombre;

        if (move_uploaded_file($nombreTemporal, $destino)) { ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Respuesta Formulario 1</title>
                <link rel="stylesheet" href="estilos.css">
            </head>

            <body>
                <header>

                </header>
                <main>
                   <h1>FICHERO SUBIDO CON EL NOMBRE: </h1>
                   <p><?php
                   echo $nuevoNombre;
                   ?></p>


                </main>
                <footer>

                </footer>

            </body>

            </html>
<?php


        } else {
            echo "Error al mover el archivo.";
        }
    } else {
        echo "No se recibió ningún archivo válido.";
    }
} else {
    echo "Problema con el método de envío";
}
?>