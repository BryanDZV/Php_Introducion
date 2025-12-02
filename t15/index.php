
<?php
session_start();
if (!isset($_SESSION["datosConexion"])) {
    $error = "debes rellenar los campos";
    header("Location:formulario.php?error=$error");
} else {
    header("Location:./vista/dbConexion.php");
}


?>

