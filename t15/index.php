
<?php
if (
    empty($_POST["host"]) && empty($_POST["user"]) &&
    empty($_POST["pass"]) && empty($_POST["dataBase"])
) {

    $error = "Rellena los todos los Campos";
    header("Location:formulario.php");
} else {
}
?>

