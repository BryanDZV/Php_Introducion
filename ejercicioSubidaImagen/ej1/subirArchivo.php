<?php
/*1.	Realizar un formulario básico para subir un unico fichero*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
        $nombreArchivo = $_FILES['archivo']['name'];
        $rutaTemporal = $_FILES['archivo']['tmp_name'];
        $rutaDestino = './subirImagenes' . $nombreArchivo;
        $size=$_FILES['archivo']['size'];
        $Tipo= $_FILES['archivo']['type'];
        $CodigoError= $_FILES['archivo']['error'];

        // Crear el directorio uploads si no existe
        if (!is_dir('./subirImagenes')) {
            mkdir('./subirImagenes', 0777, true);
        }

        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
          ;
            echo "Nombre original: " . $_FILES['archivo']['name'] . "<br>". htmlspecialchars($nombreArchivo). "<br>";
            echo "Nombre temporal: " . $_FILES['archivo']['tmp_name'] . htmlspecialchars($rutaTemporal) . "<br>";
            echo "Tamaño: " . $_FILES['archivo']['size'] .  htmlspecialchars($size). " bytes<br>";
            echo "Tipo: " . $_FILES['archivo']['type'] . htmlspecialchars($Tipo). "<br>";
            echo "Código de error: " . $_FILES['archivo']['error'] . htmlspecialchars($CodigoError). "<br>";
        } else {
            echo "Error al mover el archivo.";
        }
    } else {
        echo "Error al subir el archivo.";
    }
}
