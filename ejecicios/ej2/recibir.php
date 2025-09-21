<?php
// Comprobamos GET (enlaces) y POST (formulario)
$id_existe = null;

if (isset($_GET['id']) && $_GET['id'] !== '') {
    $id_existe = $_GET['id'];
} elseif (isset($_POST['numero']) && $_POST['numero'] !== '') {
    $id_existe = $_POST['numero'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
</head>
<body>

<?php if (is_numeric($id_existe) && $id_existe != '') { ?>
    <table border="1">
        <tr>
            <th>Tabla de: <?php echo $id_existe; ?></th>
        </tr>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <td><?php echo $id_existe . " x " . $i . " = " . ($id_existe * $i); ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p>No hay datos</p>
<?php } ?>

</body>
</html>
