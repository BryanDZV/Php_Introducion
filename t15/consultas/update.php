<?php

$con = mysqli_connect("localhost", "root", "", "libros");

$id = 1;
$nuevoTitulo = "Harry Potter (EDICIÓN ACTUALIZADA)";
$nuevoStock = 10;

$sql = "UPDATE book 
        SET title = '$nuevoTitulo', stock = $nuevoStock
        WHERE id = $id";

if (mysqli_query($con, $sql)) {
    echo "Libro actualizado correctamente";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
