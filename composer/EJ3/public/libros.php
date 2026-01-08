<?php
$clienteId = $_POST['cliente_id'];
?>

<!DOCTYPE html>
<html>

<body>

    <h2>Seleccionar libros</h2>

    <form action="procesar_venta.php" method="post">

        <input type="hidden" name="cliente_id" value="<?= $clienteId ?>">

        <input type="checkbox" name="libros[]" value="1"> Libro 1<br>
        <input type="checkbox" name="libros[]" value="2"> Libro 2<br>
        <input type="checkbox" name="libros[]" value="200"> Libro 200<br>

        <button type="submit">Comprar</button>
    </form>

</body>

</html>