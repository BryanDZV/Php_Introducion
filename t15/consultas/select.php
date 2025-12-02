<?php

$con = mysqli_connect("localhost", "root", "", "libros");

$sql = "SELECT * FROM book";
$resultado = mysqli_query($con, $sql);

echo "<h2>Listado de libros</h2>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $fila["id"] . "<br>";
    echo "ISBN: " . $fila["isbn"] . "<br>";
    echo "Título: " . $fila["title"] . "<br>";
    echo "Autor: " . $fila["author"] . "<br>";
    echo "Stock: " . $fila["stock"] . "<br>";
    echo "Precio: " . $fila["price"] . "<br>";
    echo "<hr>";
}

mysqli_close($con);
