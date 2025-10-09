<?php
require "calendario_funciones.php";

if (isset($_POST["year"]) && !empty($_POST["year"])) {
    $year = $_POST["year"];
    $meses = calendario_anual($year);
    var_dump($meses);
} else {
    header("Location:index.php?resultado=error");
}
