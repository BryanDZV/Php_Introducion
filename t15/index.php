
<?php
session_start();
if (!isset($_SESSION["datosConexion"])) {
    //capturar si todavia no se rellena campos
    $error = "debes rellenar los camposssssss";
    header("Location:./vista/formulario.php?error=$error");
} elseif (isset($_GET["error"])) {
    //capturar el error de conexion
    $error = $_GET["error"];
    header("Location:./vista/forumulario.php?error=$error");
} else {
    header("Location:./vista/dbConexion.php");
}


?>

