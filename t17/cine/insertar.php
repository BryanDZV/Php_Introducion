<?php
if (!isset($_POST["titulo"])) {
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Título: <input type="text" name="titulo"><br>
        Duración: <input type="number" name="duracion"><br>
        Sesión 1: <input type="text" name="sesion1"><br>
        Sesión 2: <input type="text" name="sesion2"><br>
        <input type="submit" value="Guardar">
    </form>

<?php
} else {

    $xml = simplexml_load_file("./CINESLYS_BASEDEDATOS.txt");

    // Crear película
    $pelicula = $xml->addChild("pelicula");
    $pelicula->addAttribute("id", time()); // id único simple

    $pelicula->addChild("titulo", $_POST["titulo"]);
    $pelicula->addChild("duracion", $_POST["duracion"]);

    $sesiones = $pelicula->addChild("sesiones");
    $sesiones->addChild("sesion", $_POST["sesion1"]);
    $sesiones->addChild("sesion", $_POST["sesion2"]);

    // Guardar XML
    $xml->asXML("cines.xml");

    header("Location:index.php");
}
?>