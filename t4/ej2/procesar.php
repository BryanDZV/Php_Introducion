<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $nombre = $_FILES['archivo']['name'];
        $nombreTemporal = $_FILES['archivo']['tmp_name'];
        $size = $_FILES['archivo']['size'];
        $tipo = $_FILES['archivo']['type'];
        $codigoError = $_FILES['archivo']['error'];
        $rutaDir = "./imagenesSubidas/";

        if ($tipo == "image/gif" || $tipo == "image/jpeg") {
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
                    <title>Respuesta Formulario 2</title>
                    <link rel="stylesheet" href="estilos.css">
                </head>

                <body>
                    <header>
                        <h1>Respuesta</h1>

                    </header>
                    <main>
                        <div class="box-img">
                            <h1>FICHERO SUBIDO CON EL NOMBRE: </h1>
                        <p><?php
                            echo $nuevoNombre;
                            ?></p>
                        
                        
                        </div>
                        <img class="imagen" src=" <?php echo $destino ?>" alt='Archivo subido'>

                        






                    </main>
                    <footer>
                        <p>2025</p>

                    </footer>

                </body>

                </html>
<?php


            } else {
                echo "Error al mover el archivo.";
            }
        } else {
            echo "<h1>Formato no Válido</h1>";
        }
    } else {
        echo "Problema con el método de envío";
    }
}
?>