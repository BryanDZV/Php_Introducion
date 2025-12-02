<?php

$con = mysqli_connect("localhost", "root", "", "libros");

$id = 3;

$sql = "DELETE FROM book WHERE id = $id";

if (mysqli_query($con, $sql)) {
    echo "Libro borrado correctamente";
} else {
    echo "Error al borrar: " . mysqli_error($con);
}

mysqli_close($con);
