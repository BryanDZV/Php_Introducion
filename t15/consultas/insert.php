<?php

$con = mysqli_connect("localhost", "root", "", "libros");

$isbn = "123-456-789";
$title = "Nuevo libro de prueba";
$author = "Bryan";
$stock = 3;
$price = 12.99;

$sql = "INSERT INTO book (isbn, title, author, stock, price)
        VALUES ('$isbn', '$title', '$author', $stock, $price)";

if (mysqli_query($con, $sql)) {
    echo "Libro insertado correctamente";
} else {
    echo "Error al insertar: " . mysqli_error($con);
}

mysqli_close($con);
