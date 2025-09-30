<?php
$a = 7; // Hasta qué número generar tablas
$max = 10; // Hasta qué multiplicar
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tablas de Multiplicar Horizontal</title>
<link rel="stylesheet" href="estilos.css">

</head>
<body>
<h1>Tablas de multiplicar hasta <?php echo $a; ?></h1>

<?php
for($i = 1; $i <= $a; $i++) {
    echo "<table class='tabla'>";
    echo "<tr><th colspan='2'>Tabla del $i</th></tr>";
    for($j = 1; $j <= $max; $j++) {
        echo "<tr>";
        echo "<td>$i x $j</td>";
        echo "<td>" . ($i * $j) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
