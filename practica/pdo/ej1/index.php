<?php
require "./Clases/Book.php";
require "./Clases/MiCabecera.php";
require "./Clases/Customer.php";
$cabecera = new MiCabecera("HOLITA", "david");

$b1 = new Book("pepe", "hola", 123214);
$b2 = new Book("pepedd", "holads", 2132132);
$b3 = new Book("pepess", "holasss", 35123);

echo $b1 . "<br>" . $b2 . "<br>" . $b3;
echo "<br>" . "++++++++++" . "<br>";
echo $b1->getAutor();
echo Customer::getLastid();
$c1 = new Customer("juanito", 23);
echo $c1->getNombre();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?= $cabecera ?></h1>
    <h2>CONTADOR EDAD:<?= $c1->getEdad() ?></h2>

    <button name="sumar" value="<?php $c1->setEdad(1) ?>">SUMAR</button>

    <button name="restar">RESTAR</button>
</body>

</html>