<?php
$id = $_GET["id"];
$xml = simplexml_load_file("./CINESLYS_BASEDEDATOS.txt");

$pos = 0;
foreach ($xml->pelicula as $pelicula) {
    if ((string)$pelicula['id'] === $id) {
        unset($xml->pelicula[$pos]);
        break;
    }
    $pos++;
}

$xml->asXML("cines.xml");
header("Location:index.php");
