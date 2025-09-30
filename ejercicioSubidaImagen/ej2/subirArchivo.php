<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['archivo'])) {
        $nombreArchivo = $_FILES['archivo']['name'];
        $rutaTemporal = $_FILES['archivo']['tmp_name'];
        $rutaDestino = './imagenesSubidas/' . $nombreArchivo;
        $size = $_FILES['archivo']['size'];
        $tipo = $_FILES['archivo']['type'];
        $codigoError = $_FILES['archivo']['error'];


        // Crear el directorio si no existe
        if (!is_dir('./imagenesSubidas/')) {
            mkdir('./imagenesSubidas/');
        }

        // Valido
        if ($tipo == "image/gif" || $tipo == "image/jpeg" || $tipo == "image/png") {
            if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
                echo "<div class='resultado exito'>";
                echo "<h2>Archivo subido correctamente</h2>";
                echo "<p><strong>Nombre original:</strong> " . htmlspecialchars($nombreArchivo) . "</p>";
                echo "<p><strong>Tamaño:</strong> " . htmlspecialchars($size) . " bytes</p>";
                echo "<p><strong>Tipo:</strong> " . htmlspecialchars($tipo) . "</p>";
                echo "</div>";
            } else {
                echo "<div class='resultado error'>Error al mover el archivo.</div>";
            }
        } else {
            echo "<div class='resultado error'>Formato no válido. Solo GIF, JPG o PNG.</div>";
        }
    } else {
        echo "<div class='resultado error'>Error al subir el archivo.</div>";
    }

     if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_FILES['archivo'])) {
            $nombreArchivoABuscar = $_FILES['archivo']['name'];
            $ruta = 'imagenesSubidas/' . $nombreArchivoABuscar;

            if (file_exists($ruta)) {
                echo "El archivo $ruta existe.";
            } else {
                echo "No se encontró $ruta.";
            }
        } else {
            echo "error al enviar para buscar";
            
        }
    }
}
